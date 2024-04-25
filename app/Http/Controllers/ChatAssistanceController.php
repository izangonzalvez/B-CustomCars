<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatAssistance;

class ChatAssistanceController extends Controller
{
    //
    // public function index()
    // {
    //     $chatassistances = ChatAssistance::all();
    //     return response()->json($chatassistances);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|integer',
    //         'type' => 'required|string|max:255',
    //     ]);

    //     $chatassistance = ChatAssistance::create($request->all());

    //     return response()->json($chatassistance, 201);
    // }

    // public function show(ChatAssistance $chatassistance)
    // {
    //     return response()->json($chatassistance);
    // }


    // public function update(Request $request, ChatAssistance $chatassistance)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|integer',
    //         'type' => 'required|string|max:255',
    //     ]);

    //     $chatassistance->update($request->all());

    //     return response()->json($chatassistance, 200);
    // }


    // public function destroy(ChatAssistance $chatassistance)
    // {
    //     $chatassistance->delete();

    //     return response()->json(null, 204);
    // }
}
