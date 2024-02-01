<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/enviroment_type/create', function () {
    return view('enviroment_type.create');
})->name('enviroment_type.create');

Route::get('/enviroment_type/index', function () {
    return view('enviroment_type.index');
})->name('enviroment_type.index');

Route::get('/enviroment_type/edit', function () {
    return view('enviroment_type.edit');
})->name('enviroment_type.edit');

Route::get('/scheduling_enviroment/create', function () {
    return view('scheduling_enviroment.create');
})->name('scheduling_enviroment.create');

Route::get('/scheduling_enviroment/index', function () {
    return view('scheduling_enviroment.index');
})->name('scheduling_enviroment.index');

Route::get('/scheduling_enviroment/edit', function () {
    return view('scheduling_enviroment.edit');
})->name('scheduling_enviroment.edit');
