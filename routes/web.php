<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\temanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teman',[temanController::class,'index'])->name('dtteman');