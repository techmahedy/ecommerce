<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::namespace('API')->group(function () {
    
//     Route::get('/shop','ShopController@index');

// });