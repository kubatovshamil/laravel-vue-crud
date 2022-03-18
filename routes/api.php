<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::resource("category", CategoryController::class)
    ->only(['index','store','show','update','destroy']);