<?php

namespace App\Helper; 

use Gloudemans\Shoppingcart\Facades\Cart;

class Helper
{
   
   public static function getHeroSectionContent()
   {
   	 $hero = \App\Banner::all();
   	 return $hero;
   }
   
   public static function getTableData(string $table = null)
   {
   	 $category = \DB::table($table)->get();
   	 
   	 return $category;
   }

   public static function image_url($path){
       return url('/'.$path);
   }

   public static function action($slug)
   {
      return \App\Blog::where('slug',$slug)->first();
   }
}
