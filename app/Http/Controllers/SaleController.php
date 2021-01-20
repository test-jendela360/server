<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sale;
use Validator;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all()->toArray();
        return array_reverse($sales);
    }

    public function add(Request $request)
    {

        $sale = new Sale([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'telp' => $request->input('telp'),
            'car' => $request->input('car')
        ]);
        $sale->save();

        return response()->json('Sale successfully added');
    }

    public function edit($id)
    {
        $sale = Sale::find($id);
        return response()->json($sale);
    }

    public function update($id, Request $request)
    {
        $sale = Sale::find($id);
        $sale->update($request->all());

        return response()->json('Successfully updated');
    }

    public function delete($id)
    {
        $sale = Sale::find($id);
        $sale->delete();

        return response()->json('Sale successfully deleted');
    }
}
