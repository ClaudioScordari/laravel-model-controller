<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Guest\PageController;

// Routes
Route::get('/', [PageController::class, 'index'])->name('home'); 

