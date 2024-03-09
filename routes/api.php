<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/client', [ClientController::class, "getClients"]);
Route::get('client/{id}', [ClientController::class, "showClientById"]);
Route::post('/client', [ClientController::class, "postClient"]);
Route::put('/client', [ClientController::class, "putClient"]);
Route::delete('/client/{id}', [ClientController::class, "deleteClient"]);