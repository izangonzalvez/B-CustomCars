<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Car;

class CarsController extends Controller
{
    private bool $_pagination = true;

    /**
    * Display a listing of the resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function index(Request $request)
    {
        $cars = Car::all();

        return response()->json($cars);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'horn' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $name   = $request->get('name');
        $color   = $request->get('color');
        $horn   = $request->get('horn'); 

        $car = Car::create($request->all());

        return response()->json($car, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return response()->json($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'horn' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
        ]);

        $car->update($request->all());

        return response()->json($car, 200);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Car  $car
    * @return \Illuminate\Http\Response
    */
    public function destroy(Car $car)
    {

        $car->delete();

        return response()->json(null, 204);
    }
}
