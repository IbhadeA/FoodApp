<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::post('/v1/register', [RegisterController::class, 'store']);
