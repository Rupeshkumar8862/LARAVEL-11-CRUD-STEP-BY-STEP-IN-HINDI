<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('categoryf',CategoryController::class);
// Route::resource('/',CategoryController::class);
