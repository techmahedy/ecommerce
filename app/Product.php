<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   

    public function categories()
    {
    	return $this->belongsTo(Category::class,'categories_id');
    }

    public function colors()
    {
    	return $this->belongsTo(Color::class,'colors_id');
    }

    public function sizes()
    {
    	return $this->belongsTo(Size::class,'sizes_id');
    }

    public function brands()
    {
    	return $this->belongsTo(Brand::class,'brands_id');
    }

    public function getRouteKeyName() {

    	return 'slug';
    	
    }
}
