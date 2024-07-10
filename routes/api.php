<?php

use App\Http\Controllers\JurusanAPIController;
use App\Http\Controllers\JurusanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jurusan', [JurusanAPIController::class, 'get_all'])->name('jurusan.get');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
