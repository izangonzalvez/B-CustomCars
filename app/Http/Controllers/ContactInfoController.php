<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $contact = ContactInfo::all();
    //     return response()->json($contact);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'address' => 'required|string|max:255',
    //         'phone' => 'required|integer',
    //         'email' => 'required|string|max:255',
    //         'message' => 'required|string|max:255',
    //     ]);

    //    $contact = ContactInfo::create($request->all());

    //     return response()->json([
    //         'succes' => true,
    //         'data' => $contact,
    //     ], 200);
        
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(ContactInfo $contact)
    // {
    //     return response()->json([
    //         'succes' => true,
    //         'data' => $contact,
    //     ], 200);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function update(Request $request, ContactInfo $contact)
    // {
    //     $request->validate([
    //         'address' => 'required|string|max:255',
    //         'phone' => 'required|integer',
    //         'email' => 'required|string|max:255',
    //         'message' => 'required|string|max:255',
    //     ]);

    //    $contact->update($request->all());

    //     return response()->json([
    //         'succes' => true,
    //         'data' => $contact,
    //     ], 200);
        
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(ContactInfo $contact)
    // {
    //     $contact->delete();

    //     return response()->json([
    //         'succes' => true,
    //         'data' => $contact,
    //     ], 200);
    // }
}
