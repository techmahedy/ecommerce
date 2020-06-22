<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Blog extends Model
{   

    protected $guarded = [];

    public function getRouteKeyName()
    {
    	return 'slug';
    }
    
}
