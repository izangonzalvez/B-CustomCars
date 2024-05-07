<?php

namespace App\Http\Controllers;

use App\Models\Sideskirt;
use Illuminate\Http\Request;

class SideskirtsController extends Controller
{
    //
    public function index()
    {
        $sideskirts = Sideskirt::all();
        return response()->json([
            "success" => true,
            "data" => $sideskirts,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);

        $sideskirt = Sideskirt::create($request->all());

        return response()->json([
            "success" => true,
            "data" => $sideskirt,
        ], 200);
    }

    public function show(Sideskirt $sideskirt)
    {
        return response()->json([
            "success" => true,
            "data" => $sideskirt,
        ], 200);
    }


    public function update(Request $request, Sideskirt $sideskirt)
    {
        $request->validate([
            'size' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'price' => 'required|integer',
        ]);

        $sideskirt->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $sideskirt,
        ], 200);
    }


    public function destroy(Sideskirt $sideskirt)
    {
        $sideskirt->delete();

        return response()->json(null, 204);
    }
}
