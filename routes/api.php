<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GebruikerController;
use App\Http\Controllers\OefeningController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;


Route::apiResource('oefeningen', OefeningController::class);
Route::apiResource('gebruikers', GebruikerController::class);

Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', function (Request $request) {
        return auth()->user();
});


    Route::post('/logout', [AuthenticationController::class, 'logout']);
    });




