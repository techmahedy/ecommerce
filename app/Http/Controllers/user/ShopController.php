<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShopController extends Controller
{
    
   public function index()
   {    
        $products = Product::latest()->get();
   	    return view('frontend.shop.shop',["products" => $products]);

   }

   public function single(Product $slug)
   {  
   	   $product = $slug->with('categories','colors','brands', 'sizes')->first();
	   return view('frontend.shop.single',compact('product'));                                
   }
}
