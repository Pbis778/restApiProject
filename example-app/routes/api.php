<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('pbist/305347/people', [PeopleController::class, 'index']);
Route::get('pbist/305347/people/{people}', [PeopleController::class, 'read']);
Route::post('pbist/305347/people', [PeopleController::class, 'create']);
Route::put('pbist/305347/people/{people}', [PeopleController::class, 'update']);
Route::delete('pbist/305347/people/{people}', [PeopleController::class, 'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
