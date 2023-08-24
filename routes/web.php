<?php
use App\Http\Controllers\MakeController;
use Illuminate\Support\Facades\Route;

Route::view('/','index');
Route::resource('home','MakeController');
Route::delete('home/force/delete/{home}', [MakeController::class, 'forceDelete'])
  ->name('home.forceDelete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
