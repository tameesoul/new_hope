<?php
use App\Http\Controllers\MakeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::view('/','welcome');

// Route::group(["middleware"=>"test:1,1"] ,function(){
//     Route::get('home','MakeController@index'); 
// });

//Route::resource('example', 'MakeController');

Route::resource("example", MakeController::class);

//// example -----> R(read) index ---->get name {example.index}
///// example/{id} -----> R(read) show ----> get name {example.show}
////// example/create ---->C create ---->get name {example.create}
////// example/store -----> c create ----->post name {example.store} 
//////// example/{id}/edit----> U update ---->get {example.edit}
/////// example/{id} ------->update ----->put {example.update}
/////// example/{id} ------->delete ----->destory {example.delete}
