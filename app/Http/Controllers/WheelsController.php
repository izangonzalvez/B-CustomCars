<?php

namespace App\Http\Controllers;

use App\Models\Wheel;
use Illuminate\Http\Request;

class WheelsController extends Controller
{
    public function index()
    {
        $wheels = Wheel::all();

        return response()->json([
            "success" => true,
            "data" => $wheels,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'inch' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $wheel = Wheel::create($request->all());

        return response()->json($wheel, 201);
    }

    public function show(Wheel $wheel)
    {
        return response()->json([
            "success" => true,
            "data" => $wheel,
        ], 200);
    }


    public function update(Request $request, Wheel $wheel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'inch' => 'required|integer',
            'price' => 'required|integer',
        ]);

        $wheel->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $wheel,
        ], 200);
    }


    public function destroy(Wheel $wheel)
    {
        $wheel->delete();

        return response()->json(null, 204);
    }
}