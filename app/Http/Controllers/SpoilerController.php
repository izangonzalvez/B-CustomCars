<?php

namespace App\Http\Controllers;

use App\Models\Spoiler;
use App\Models\User;
use Illuminate\Http\Request;

class SpoilerController extends Controller
{
    //
    public function index()
    {
        $spoilers = Spoiler::all();
        return response()->json([
            "success" => true,
            "data" => $spoilers,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'size' => 'required|string|max:255',
            'material' => 'required|string|max:255',
        ]);

        $user = User::get()->first();
        
        if ($user) {

            $spoiler = Spoiler::create([
                'type' => $request->type,
                'price' => $request->price,
                'size' => $request->size,
                'material' => $request->material,
                'user_id' => $user->id,
            ]);

            return response()->json([
                "success" => true,
                "data" => $spoiler,
            ], 200);

        } else {

            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);

        }
        
    }

    public function show(Spoiler $spoiler)
    {
        return response()->json([
            "success" => true,
            "data" => $spoiler,
        ], 200);
    }


    public function update(Request $request, Spoiler $spoiler)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'price' => 'required|integer',
            'size' => 'required|string|max:255',
            'material' => 'required|string|max:255',
        ]);

        $spoiler->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $spoiler,
        ], 200);
    }


    public function destroy(Spoiler $spoiler)
    {
        $spoiler->delete();

        return response()->json(null, 204);
    }
}
