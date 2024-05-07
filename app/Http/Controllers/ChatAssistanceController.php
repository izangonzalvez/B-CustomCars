<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatAssistance;

class ChatAssistanceController extends Controller
{
    //
    public function index()
    {
        $chatassistances = ChatAssistance::all();
        return response()->json([
            "success" => true,
            "data" => $chatassistances,
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'response' => 'required|string|max:255',
            'user_id' => 'required|integer',
        ]);

        $chatassistance = ChatAssistance::create($request->all());

        return response()->json([
            'succes' => true,
            'data' => $chatassistance,
        ], 200);    }

    public function show(ChatAssistance $chatassistance)
    {
        return response()->json([
            "success" => true,
            "data" => $chatassistance,
        ], 200);
    }


    public function update(Request $request, ChatAssistance $chatassistance)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'response' => 'required|string|max:255',
        ]);

        $chatassistance->update($request->all());

        return response()->json([
            "success" => true,
            "data" => $chatassistance,
        ], 200);
    }


    public function destroy(ChatAssistance $chatassistance)
    {
        $chatassistance->delete();

        return response()->json(null, 204);
    }
}
