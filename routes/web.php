<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/web', [WebController::class, 'index'])->name("web");

Route::get('/di', function () {
    return view('di');
})->name('di');

Route::get('/ux', function () {
    return view('ux');
})->name('ux');


Route::get('/gestion-de-projets', function () {
    return view('gestion-projet');
})->name('gestion-projet');
