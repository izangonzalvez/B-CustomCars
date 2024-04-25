<?php

namespace App\Http\Controllers;

use App\Models\Brake;
use Illuminate\Http\Request;

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
            'succes' => true,
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

       $brake = Brake::create($request->all());

        return response()->json([
            'succes' => true,
            'data' => $brake,
        ], 200);
        
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
