<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engine;
use App\Models\User;

class EnginesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $engine = Engine::all();
        return response()->json([
            'success' => true,
            'data' => $engine,
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
            'power' => 'required|integer',
            'revolutions' => 'required|integer',
            'price' => 'required|integer',
            'fuel' => 'required|string|max:255',
        ]);
        $user = User::get()->first();
        
        if ($user) {

            $engine = Engine::create([
                'name' => $request->name,
                'power' => $request->power,
                'revolutions' => $request->revolutions,
                'price' => $request->price,
                'fuel' => $request->fuel,
                'user_id' => $user->id

            ]);

            return response()->json([
                'succes' => true,
                'data' => $engine,
            ], 200);

        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);
        }
        
    }

    public function show(Engine $engine)
    {
        return response()->json([
            'succes' => true,
            'data' => $engine,
        ], 200);
    }

    public function update(Request $request, Engine $engine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'power' => 'required|integer',
            'revolutions' => 'required|integer',
            'price' => 'required|integer',
            'fuel' => 'required|string|max:255',
        ]);

        $engine->update($request->all());

        return response()->json([
            'succes' => true,
            'data' => $engine,
        ], 200);
        
    }

    public function destroy(Engine $engine)
    {
        $engine->delete();

        return response()->json([
            'succes' => true,
            'data' => $engine,
        ], 200);
    }

}
