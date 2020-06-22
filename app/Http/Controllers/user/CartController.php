<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart($id)
    {   

    	$product = \App\Product::findOrFail($id);

        Cart::add([
        	'id' => $id, 
        	'name' => $product->name, 
        	'qty' => 1, 
        	'price' => $product->price
        ]);

    	return redirect()->back();
    }

    public function cart(Request $request,$id)
    {   

        $product = \App\Product::findOrFail($id);

        Cart::add([
            'id' => $id, 
            'name' => $product->name, 
            'qty' => $request->qty, 
            'price' => $product->price
        ]);

        return redirect()->back();
    }

    public function delete(Request $request)
    {
       Cart::remove($request->rowId);
       return redirect()->back();
    }

}
