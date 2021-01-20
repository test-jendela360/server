<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Validator;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all()->toArray();
        return array_reverse($cars);
    }

    public function add(Request $request)
    {
        $car = new Car([
            'name' => $request->input('name'),
            'prize' => $request->input('prize'),
            'stock' => $request->input('stock')
        ]);
        
        $car->save();

        return response()->json('Car success added');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return response()->json($car);
    }

    public function update($id, Request $request)
    {
        $car = Car::find($id);
        $car->update($request->all());

        return response()->json('Car updated');
    }

    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();

        return response()->json('Car success delete');
    }
}
