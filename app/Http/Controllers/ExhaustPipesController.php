<?php

namespace App\Http\Controllers;

use App\Models\Exhaustpipe;
use Illuminate\Http\Request;

class ExhaustPipesController extends Controller
{
    //
    // public function index()
    // {
    //     $exhaustpipes = Exhaustpipe::all();
    //     return response()->json($exhaustpipes);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|integer',
    //         'type' => 'required|string|max:255',
    //     ]);

    //     $exhaustpipe = Exhaustpipe::create($request->all());

    //     return response()->json($exhaustpipe, 201);
    // }

    // public function show(Exhaustpipe $exhaustpipe)
    // {
    //     return response()->json($exhaustpipe);
    // }


    // public function update(Request $request, Exhaustpipe $exhaustpipe)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|integer',
    //         'type' => 'required|string|max:255',
    //     ]);

    //     $exhaustpipe->update($request->all());

    //     return response()->json($exhaustpipe, 200);
    // }


    // public function destroy(Exhaustpipe $exhaustpipe)
    // {
    //     $exhaustpipe->delete();

    //     return response()->json(null, 204);
    // }
}
