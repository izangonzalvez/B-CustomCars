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
            // No necesitas validar las piezas por nombre, ya que las IDs se asignarán en el frontend
        ]);

        // Mapea las piezas de los coches a sus IDs
        $carData = $request->only(['name', 'color', 'horn', 'post', 'user_id']);
        $carData['wheel_id'] = $request->input('wheel');
        $carData['engine_id'] = $request->input('engine');
        $carData['suspension_id'] = $request->input('suspension');
        $carData['brake_id'] = $request->input('brake');
        $carData['exhaustpipe_id'] = $request->input('exhaustpipe');
        $carData['light_id'] = $request->input('light');
        $carData['spoiler_id'] = $request->input('spoiler');
        $carData['sideskirt_id'] = $request->input('sideskirt');

        $car = Car::create($carData);

        return response()->json([
            'success' => true,
            'data' => $car,
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

    $carData = $request->only(['name', 'color', 'horn', 'user_id']);
    $carData['wheel_id'] = $request->input('wheel');
    $carData['engine_id'] = $request->input('engine');
    $carData['suspension_id'] = $request->input('suspension');
    $carData['brake_id'] = $request->input('brake');
    $carData['exhaustpipe_id'] = $request->input('exhaustpipe');
    $carData['light_id'] = $request->input('light');
    $carData['spoiler_id'] = $request->input('spoiler');
    $carData['sideskirt_id'] = $request->input('sideskirt');

    $car->update($carData);

    return response()->json([
        "success" => true,
        "data" => $car,
    ], 200);
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

    public function publish(Request $request, Car $car)
    {
        $request->validate([
            'post' => 'required|boolean',
        ]);

        $car->update(['post' => $request->post]);

        return response()->json([
            "success" => true,
            "data" => $car,
        ], 200);
    }

    }
