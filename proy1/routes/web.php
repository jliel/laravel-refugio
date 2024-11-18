<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\unoController;

Route::get('/', [unoController::class, 'index']);
