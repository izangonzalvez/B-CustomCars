<?php

namespace App\Http\Controllers;

use App\Models\Brake;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrakesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $brakes = Brake::all();
        return response()->json([
            'success' => true,
            'data' => $brakes,
        ], 200);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);
        
        $user = User::get()->first();
    
        // dd($user);
        if ($user) {
            
            $brake = Brake::create([
                'name' => $request->name,
                'style' => $request->style,
                'model' => $request->model,
                'price' => $request->price,
                'user_id' => $user->id,
            ]);
            
            return response()->json([
                'succes' => true,
                'data' => $brake,
            ], 200);

        } else {

            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);
        }
    }

    public function show(Brake $brake)
    {
        return response()->json([
            'succes' => true,
            'data' => $brake,
        ], 200);
    }

    public function update(Request $request, Brake $brake)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'style' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);

        $brake->update($request ->all());

        return response()->json([
            'succes' => true,
            'data' => $brake,
        ], 200);
    }

    public function destroy(Brake $brake)
    {
        $brake->delete();

        return response()->json([
            'succes' => true,
            'data' => $brake,
        ], 200);
    }
}
