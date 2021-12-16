<?php

use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->Middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

