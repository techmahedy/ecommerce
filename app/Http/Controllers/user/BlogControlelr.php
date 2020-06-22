<?php

namespace App\Http\Controllers\user;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Blog $slug)
    {
    	return $slug;
    }
}
