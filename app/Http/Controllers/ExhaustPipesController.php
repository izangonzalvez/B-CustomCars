<?php

namespace App\Http\Controllers;

use App\Models\Exhaustpipe;
use App\Models\User;
use Illuminate\Http\Request;

class ExhaustPipesController extends Controller
{
    
    public function index()
    {
        $exhaustpipes = Exhaustpipe::all();
        return response()->json([
            "success" => true,
            "data" => $exhaustpipes,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);
        $user = User::get()->first();

        if ($user) {

            $exhaustpipe = Exhaustpipe::create([
                'size' => $request->size,
                'price' => $request->price,
                'type' => $request->type,
                'user_id' => $user->id
            ]);

            return response()->json([
                "success" => true,
                "data" => $exhaustpipe,
            ], 200);

        } else {

            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);
        }

        
    }

    public function show(Exhaustpipe $exhaustpipe)
    {
        return response()->json($exhaustpipe);
    }


    public function update(Request $request, Exhaustpipe $exhaustpipe)
    {
        $request->validate([
            'size' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        $exhaustpipe->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $exhaustpipe,
        ], 200);
    }


    public function destroy(Exhaustpipe $exhaustpipe)
    {
        $exhaustpipe->delete();

        return response()->json(null, 204);
    }
}
