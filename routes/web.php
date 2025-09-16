<?php


use App\Http\Controllers\flashController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LapController;
use App\Http\Controllers\TurboController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\leet;

use App\Http\Controllers\testController;
use App\Http\Controllers\uploadController;





Route::get('/', function () {
    return view('welcome');
});
Route::view('aptest','request'); // Show the form
Route::post('aptest',[RequestController::class,'login']); // Handle form submit

Route::post('login',[leet::class,'login']);
Route::view('login','login');

Route::view('since','since');
Route::get('logout',[leet::class,'logout']);

Route::post('add',[flashController::class,'adduser']);
Route::view('flash','flash');



Route::view('upload','upload');  
Route::post('upload',[uploadController::class,'upload']);

