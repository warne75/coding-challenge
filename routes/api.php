<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('categories', 'App\Http\Controllers\CategoryController@index');
Route::get('products/{product}', 'App\Http\Controllers\ProductController@show');
Route::post('products', 'App\Http\Controllers\ProductController@store');
Route::put('products/{product}', 'App\Http\Controllers\ProductController@update');
Route::delete('products/{product}', 'App\Http\Controllers\ProductController@delete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
