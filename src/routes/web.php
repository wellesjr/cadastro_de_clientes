<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::resource('/', ClienteController::class);
