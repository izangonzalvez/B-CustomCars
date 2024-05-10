<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\User;
use Illuminate\Http\Request;
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
    /**
     * Almacena un nuevo proveedor en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'email' => 'required|email|unique:proveedors,email', 
        ]);

        // Crea un nuevo proveedor
        $proveedor = Proveedor::create([
            'email' => $request->email,
        ]);

        // Retorna una respuesta JSON
        return response()->json([
            'success' => true,
            'message' => 'Proveedor creado exitosamente.',
            'data' => $proveedor,
        ], 201);
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
    public function update(Request $request, $id)
    {

        $proveedor = Proveedor::find($id);

        $request->validate([
            'email' => 'required|email|unique:proveedors,email,' . $proveedor->id, 
        ]);

        $proveedor->email = $request->email;
        $proveedor->save();

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
