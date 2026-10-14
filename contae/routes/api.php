<?php

use App\Http\Controllers\TransacaoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/coaches', [App\Http\Controllers\CoachController::class, 'index']);
//Route::get('/competitors', [App\Http\Controllers\CompetitorController::class, 'index']);
//Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index']);
//Route::get('/modalities', [App\Http\Controllers\ModalityController::class, 'index']);
//Route::get('/ratings', [App\Http\Controllers\RatingController::class, 'index']);


Route::apiResource('transacoes', TransacaoController::class);
