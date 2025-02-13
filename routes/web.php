<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('create', [PhotoController::class, 'create'])->name('create');

