<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engine;

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
            'succes' => true,
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

       $engine = Engine::create($request->all());

        return response()->json([
            'succes' => true,
            'data' => $engine,
        ], 200);
        
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
