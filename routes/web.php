<?php


use App\Http\Controllers\flashController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;





Route::get('/', function () {
    return view('welcome');
});

Route::post('add',[flashController::class,'adduser']);
Route::view('flash','flash');



