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
        $cars = Car::all();

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
        $validatedData = $request->validate([
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

        $name   = $request->get('name');
        $color   = $request->get('color');
        $horn   = $request->get('horn'); 
        $userId = $request->input('user_id');
        $wheel_id = $request->input('wheel_id');
        $engine_id = $request->input('engine_id');
        $suspension_id =$request->input('suspension_id');
        $brake_id = $request->input('brake_id');
        $exhaustpipe_id = $request->input('exhaustpipe_id');
        $light_id = $request->input('light_id');
        $spoiler_id = $request->input('spoiler_id');
        $sideskirt_id = $request->input('sideskirt_id');

        if($validatedData){
            $car = Car::create([
                'name' => $name,
                'color' => $color,
                'horn' => $horn,
                'user_id' => $userId,
                'wheel_id' => $wheel_id,
                'engine_id' => $engine_id,
                'suspension_id' => $suspension_id,
                'brake_id' => $brake_id,
                'exhaustpipe_id' => $exhaustpipe_id,
                'light_id' => $light_id,
                'spoiler_id' => $spoiler_id,
                'sideskirt_id' => $sideskirt_id,
            ]);

            return response()->json([
                'success' => true,
                'data' => $car,
            ], 200);
        } else {
            return response()->json([
                'succes' => false,
                'message' => 'Datos no encontrados',
            ], 404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(string $carID)
    {
        // return response()->json($car);

        $car = Car::find($carID);
        return response()->json([
            'succes' => true,
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
