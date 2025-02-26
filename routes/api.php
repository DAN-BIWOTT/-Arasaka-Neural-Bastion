<?php
use App\Http\Controllers\Api\TradingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/trading-data', [TradingController::class, 'index']);
Route::post('/trading-data', [TradingController::class, 'store']);
Route::get('/trading-data/{id}', [TradingController::class, 'show']);
Route::put('/trading-data/{id}', [TradingController::class, 'update']);
Route::delete('/trading-data/{id}', [TradingController::class, 'destroy']);