<?php


use App\Http\Controllers\flashController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\Session;

use App\Http\Controllers\RedisDemoController;

use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\DemoCacheController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\uploadController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', [DemoCacheController::class, 'getUsers']);
Route::get('/users/clear-cache', [DemoCacheController::class, 'clearUsersCache']);
Route::get('/check-cache', [DemoCacheController::class, 'checkCache']);


Route::view('aptest','request'); // Show the form
Route::post('aptest',[RequestController::class,'login']); // Handle form submit
Route::post('login',[session::class,'login']);
Route::view('login','login');
Route::view('since','since');
Route::get('logout',[session::class,'logout']);

Route::get('/products', [ProductController::class, 'showCount']);

Route::post('add',[flashController::class,'adduser']);
Route::view('flash','flash');



Route::get('/redis-store', [RedisDemoController::class, 'storeMessage']);


Route::get('/redis-get', [RedisDemoController::class, 'getMessage']);


Route::get('/redis-delete', [RedisDemoController::class, 'deleteMessage']);


Route::view('upload','upload');  
Route::post('upload',[uploadController::class,'upload']);




Route::get('/clear-product-cache', function () {
    Cache::forget('product_count');
    return "Product cache cleared!";

});