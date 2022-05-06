<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;




Route::get('/',[HomeController::class,'index']);
Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/users',[AdminController::class,'user']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::get('/editmenu/{id}',[AdminController::class,'editmenu']);
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
Route::post('/uploadfood',[AdminController::class,'upload']);
Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/viewreservation',[AdminController::class,'viewreservation']);
Route::get('/viewchef',[AdminController::class,'viewchef']);
Route::post('/uploadchef',[AdminController::class,'uploadchef']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
