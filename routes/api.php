<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BakersApi\StockController;
use App\Http\Controllers\BakersApi\ReserveController;
use App\Http\Controllers\BakersApi\DeliveryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/cake-stock', StockController::class);
Route::post('/reserve', ReserveController::class);
Route::get('/deliveries-today', DeliveryController::class);
