<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('band', \App\Http\Controllers\BandController::class);
Route::resource('concert', \App\Http\Controllers\ConcertController::class);
Route::resource('ticket', \App\Http\Controllers\TicketController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
