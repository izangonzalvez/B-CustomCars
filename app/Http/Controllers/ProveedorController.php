<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProveedorController extends Controller
{
    /**
     * Muestra una lista de todos los proveedores.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor = Proveedor::all();
        return response()->json([
            'success' => true,
            'data' => $proveedor,
        ], 200);
    }


    public function loginProveedor(Request $request){
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            // Get user
            $proveedor = Proveedor::where([
                ["email", "=", $credentials["email"]]
            ])->firstOrFail();
            // Revoke all old tokens
            $proveedor->tokens()->delete();
            // Generate new token
            $token = $proveedor->createToken("authToken")->plainTextToken;
            // Token response
            return response()->json([
                "success"   => true,
                "authToken" => $token,
                "tokenType" => "Bearer"
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Invalid login credentials"
            ], 401);
        }
 
    }

    /**
     * Almacena un nuevo proveedor en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerProveedor(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255', 
            'password' => 'required|string|min:4',
        ]);

        // Crea un nuevo proveedor
        $proveedor = Proveedor::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $token = $proveedor->createToken('api_token')->plainTextToken;

        // Retorna una respuesta JSON
        return response()->json([
            'success' => true,
            'message' => 'Proveedor creado exitosamente.',
            'authToken' => $token,
            'tokenType' => 'Bearer',
            'data' => $proveedor,
        ], 201);
    }

    public function logout(Request $request)
    {
        $proveedor = $request->user();

        if ($proveedor) {
            // Revocar todos los tokens de acceso del usuario
            $proveedor->tokens()->delete();
        }

        return response()->json([
            'success' => true,
            'message' => 'Logout exitoso'
        ], 200);
    }

    /**
     * Muestra el proveedor especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Proveedor $proveedor)
    {
        return response()->json([
            'succes' => true,
            'data' => $proveedor,
        ], 200);
    }

    /**
     * Actualiza el proveedor especificado en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:proveedors,email', 
            'password' => 'required|integer|min:4',
        ]);

        $proveedor->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Proveedor actualizado exitosamente.',
            'data' => $proveedor,
        ], 200);
    }

    /**
     * Elimina el proveedor especificado de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return response()->json([
            'succes' => true,
            'data' => $proveedor,
        ], 200);
    }
}
