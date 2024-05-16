<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Models\User;
use Illuminate\Http\Request;

class LightsController extends Controller
{
    //
    public function index()
    {
        $lights = Light::all();
        return response()->json([
            "success" => true,
            "data" => $lights,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'color' => 'required|string|max:255',
        ]);
        $user = User::get()->first();

        if ($user) {
            
            $light = Light::create([
                'name' => $request->name,
                'type' => $request->type,
                'price' => $request->price,
                'color' => $request->color,
                'user_id' => $user->id
            ]);

            return response()->json([
                "success" => true,
                "data" => $light,
            ], 200);

        } else {
            
            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);
        }

    }

    public function show(Light $light)
    {
        return response()->json([
            "success" => true,
            "data" => $light,
        ], 200);
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

        return response()->json([
            "success" => true,
            "data" => $light,
        ], 200);
    }


    public function destroy(Light $light)
    {
        $light->delete();

        return response()->json(null, 204);
    }
}
