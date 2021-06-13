<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
      // code...
      return view('posts.create');
    }

    public function store()
    {
      //dd(request()->all());
      dd('hi');
    }
}
