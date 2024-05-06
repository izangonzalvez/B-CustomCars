<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Car;
use Symfony\Component\Console\Input\Input;

class CarsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function index(Request $request)
    {
        $cars = Car::with('wheel', 'engine','exhaustpipe','light','spoiler','suspension','sideskirt','brake')->get();

        return response()->json([
            "success" => true,
            "data" => $cars,
        ], 200);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'horn' => 'required|string|max:255',
            'post' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
            'wheel_id' => 'required|exists:wheels,id',
            'engine_id' => 'required|exists:engines,id', 
            'suspension_id' => 'required|exists:suspensions,id',
            'brake_id' => 'required|exists:brakes,id',
            'exhaustpipe_id' => 'required|exists:exhaustpipes,id',
            'light_id' => 'required|exists:lights,id',
            'spoiler_id' => 'required|exists:spoilers,id',
            'sideskirt_id' => 'required|exists:sideskirts,id',
        ]);

        $cars = Car::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $cars,
        ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    // public function show(string $carID)
    // {
    //     // return response()->json($car);

    //     $car = Car::find($carID);
    //     return response()->json([
    //         'succes' => true,
    //         'data' => $car,
    //     ], 200);

    // }

    public function show($id)
    {
        $car = Car::with('wheel', 'engine', 'exhaustpipe', 'light', 'spoiler', 'suspension', 'sideskirt', 'brake')->find($id);
        
        if (!$car) {
            return response()->json([
                'success' => false,
                'message' => 'Car not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $car,
        ], 200);
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
            'wheel_id' => 'required|exists:wheels,id',
            'engine_id' => 'required|exists:engines,id', 
            'suspension_id' => 'required|exists:suspensions,id',
            'brake_id' => 'required|exists:brakes,id',
            'exhaustpipe_id' => 'required|exists:exhaustpipes,id',
            'light_id' => 'required|exists:lights,id',
            'spoiler_id' => 'required|exists:spoilers,id',
            'sideskirt_id' => 'required|exists:sideskirts,id',
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
