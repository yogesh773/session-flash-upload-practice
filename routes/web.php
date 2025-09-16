<?php


use App\Http\Controllers\flashController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\Session;


use App\Http\Controllers\uploadController;





Route::get('/', function () {
    return view('welcome');
});

Route::post('login',[session::class,'login']);
Route::view('login','login');

Route::view('session','session');
Route::get('session',[session::class,'session']);

Route::post('add',[flashController::class,'adduser']);
Route::view('flash','flash');



Route::view('upload','upload');  
Route::post('upload',[uploadController::class,'upload']);

