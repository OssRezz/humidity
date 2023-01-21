<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\HistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('cities', CityController::class)->except(['create', 'store', 'update', 'destroy', 'edit']);
Route::resource('history', HistoryController::class)->except(['create', 'store', 'update', 'destroy', 'edit']);
