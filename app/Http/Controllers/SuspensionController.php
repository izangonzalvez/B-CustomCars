<?php

namespace App\Http\Controllers;

use App\Models\Suspension;
use Illuminate\Http\Request;

class SuspensionController extends Controller
{
    public function index()
    {
        $suspensions = Suspension::all();
        return response()->json($suspensions);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        $suspension = Suspension::create($request->all());

        return response()->json($suspension, 201);
    }

    public function show(Suspension $suspension)
    {
        return response()->json($suspension);
    }


    public function update(Request $request, Suspension $suspension)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'type' => 'required|string|max:255',
        ]);

        $suspension->update($request->all());

        return response()->json($suspension, 200);
    }


    public function destroy(Suspension $suspension)
    {
        $suspension->delete();

        return response()->json(null, 204);
    }
}
