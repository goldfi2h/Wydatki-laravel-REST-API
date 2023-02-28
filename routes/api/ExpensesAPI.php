<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::controller(ExpenseController::class)->prefix('expenses')->group(function (){
    Route::get('/', 'index');       //pokaż wszystko
});