<?php

use App\Http\Controllers\Api\ApiUsersController;
use App\Http\Controllers\Api\UmumPatenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/users/store',[ApiUsersController::class, "store"]);
Route::get('/users/get/data',[ApiUsersController::class, "getAllData"]);
Route::get('/users/get/data/{id}',[ApiUsersController::class, "getData"]);
Route::delete('/users/delete/data/{id}',[ApiUsersController::class, "deleteData"]);
Route::put('/users/update/data/{id}',[ApiUsersController::class, "updateData"]);


