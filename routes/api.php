<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('cars', CarController::class . '@index');
Route::group(['prefix' => 'car'], function ()
{
    Route::post('add', CarController::class . '@add');
    Route::get('edit/{id}', CarController::class . '@edit');
    Route::post('update/{id}', CarController::class . '@update');
    Route::delete('delete/{id}', CarController::class . '@delete');
});

Route::get('sales',  SaleController::class . '@index');
Route::group(['prefix' => 'sale'], function () {
    Route::post('add', SaleController::class . '@add');
    Route::get('edit/{id}', SaleController::class . '@edit');
    Route::post('update/{id}', SaleController::class . '@update');
    Route::delete('delete/{id}', SaleController::class . '@delete');
});

Route::post('register', AuthController::class . '@register');
Route::post('login', AuthController::class . '@login');
