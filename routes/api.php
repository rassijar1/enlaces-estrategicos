<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

 Route::group(['prefix' =>'V1'], function(){

 Route::apiResource('posts', 'App\Http\Controllers\Api\V1\PostController');

 });

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

