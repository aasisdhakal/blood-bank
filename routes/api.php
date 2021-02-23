<?php

use App\Http\Controllers\DonorController;
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

Route::get('/donors', [DonorController::class, 'index']);
Route::get('/donor/{id}', [DonorController::class, 'show']);
Route::post('/donor', [DonorController::class, 'create']);
Route::patch('/donor/{id}', [DonorController::class, 'update']);
Route::delete('/donor/{id}', [DonorController::class, 'destroy']);
	