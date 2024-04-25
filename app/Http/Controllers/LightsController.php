<?php

namespace App\Http\Controllers;

use App\Models\Light;
use Illuminate\Http\Request;

class LightsController extends Controller
{
    //
    public function index()
    {
        $lights = Light::all();
        return response()->json($lights);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'color' => 'required|string|max:255',
        ]);

        $light = Light::create($request->all());

        return response()->json($light, 201);
    }

    public function show(Light $light)
    {
        return response()->json($light);
    }


    public function update(Request $request, Light $light)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'color' => 'required|string|max:255',
        ]);

        $light->update($request->all());

        return response()->json($light, 200);
    }


    public function destroy(Light $light)
    {
        $light->delete();

        return response()->json(null, 204);
    }
}
