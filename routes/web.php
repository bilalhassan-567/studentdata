<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\studentdataController;

Route::get('/', function () {
    return view('welcome');
});

Route:: resource('studentdata', CategoryController::class);
Route::post('studentdata', [CategoryController::class, 'store'])->name('studentdata.store');

Route::get('studentdata/create', [categoryController::class, 'create'])->name('studentdata.create');
Route::put('studentdata/{studentdatum}', [categoryController::class, 'update'])->name('studentdata.update');
