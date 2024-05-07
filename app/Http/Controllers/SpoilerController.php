<?php

namespace App\Http\Controllers;

use App\Models\Spoiler;
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

        $spoiler = Spoiler::create($request->all());

        return response()->json([
            "success" => true,
            "data" => $spoiler,
        ], 200);
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
