<?php

use App\Http\Controllers\historicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cotizacionController;


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(cotizacionController::class)->group(function (){
    Route::get('datos', 'datos');
    Route::get('update', 'update');
});

Route::controller(historicoController::class)->group(function () {
    Route::get('historico', 'historico');
    Route::get('obtenerHistorico', 'obtenerHistorico');
    Route::get('obtenerHistoricoJSON', 'obtenerHistoricoJSON');
});

