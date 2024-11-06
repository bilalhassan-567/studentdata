<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('studentdata', CategoryController::class);
Route::post('studentdata', [CategoryController::class, 'store'])->name('studentdata.store');
Route::get('studentdata/create', [CategoryController::class, 'create'])->name('studentdata.create');
