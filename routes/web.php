<?php
use App\Http\Controllers\MakeController;
use Illuminate\Support\Facades\Route;

Route::view('/','index');
Route::resource('home','MakeController');
Route::delete('home/force/delete/{home}', [MakeController::class, 'forceDelete'])
  ->name('home.forceDelete');
//Route::resource('example', 'MakeController');
//// example -----> R(read) index ---->get name {example.index}
///// example/{id} -----> R(read) show ----> get name {example.show}
////// example/create ---->C create ---->get name {example.create}
////// example/store -----> c create ----->post name {example.store} 
//////// example/{id}/edit----> U update ---->get {example.edit}
/////// example/{id} ------->update ----->put {example.update}
/////// example/{id} ------->delete ----->destory {example.delete}
