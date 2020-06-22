<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];
    
    public function categories()
    {
    	return $this->hasMany(Product::class);
    }

}
