<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(CategoryController::class)->prefix('category')->group(function (){
    Route::get('/', 'index');       //pokaż wszystko
});