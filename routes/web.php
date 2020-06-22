<?php

use App\Blog;
use Gloudemans\Shoppingcart\Facades\Cart;

Route::view('/','welcome');

Route::namespace('user')->group(function () {
    
    Route::get('/shop','ShopController@index')->name('shop');
    Route::get('/shop/{slug}','ShopController@single')->name('shop.single');

    //Cart
    Route::get('/cart/{id}','CartController@add_to_cart')->name('cart.add');
    Route::post('/carts/{id}','CartController@cart')->name('cart');
    Route::post('/cart/{id}','CartController@delete')->name('cart.delete');

    Route::view('cart', 'frontend.cart.cart')->name('cart.view');
    Route::view('checkout', 'frontend.cart.checkout')->name('checkout');

    //BlogController
    // Route::get('{slug}','BlogController@index');
});

Route::get('blog/{slug}', function(Blog $slug)
{
    return $slug;

})->where('slug', '([A-z\d-\/_.]+)?')->name('blog');