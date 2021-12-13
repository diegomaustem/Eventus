<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EventController::class, 'welcome']);
Route::get('/events/create', [EventController::class, 'create']);

