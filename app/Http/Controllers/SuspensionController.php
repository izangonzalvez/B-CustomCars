<?php

namespace App\Http\Controllers;

use App\Models\Suspension;
use App\Models\User;
use Illuminate\Http\Request;

class SuspensionController extends Controller
{
    public function index()
    {
        $suspensions = Suspension::all();
        return response()->json([
            "success" => true,
            "data" => $suspensions,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        $user = User::get()->first();

        if ($user) {

            $suspension = Suspension::create([
                'name' => $request->name,
                'price' => $request->price,
                'type' => $request->type,
                'user_id' => $user->id
            ]);

            return response()->json([
                "success" => true,
                "data" => $suspension,
            ], 200);
            
        } else {

            return response()->json([
                'succes' => false,
                'message' => 'Usuario no encontrado',
            ], 404);

        }
        
    }

    public function show(Suspension $suspension)
    {
        return response()->json([
            "success" => true,
            "data" => $suspension,
        ], 200);
    }


    public function update(Request $request, Suspension $suspension)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        $suspension->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $suspension,
        ], 200);
    }


    public function destroy(Suspension $suspension)
    {
        $suspension->delete();

        return response()->json(null, 204);
    }
}
