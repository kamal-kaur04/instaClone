<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    public function create()
    {
      // code...
      return view('posts.create');
    }

    public function store()
    {
      $data = request()->validate([
        'another' => '',
        'caption' => 'required',
        'image' => ['required','image'],
      ]);

      $imagePath = request('image')->store('uploads','public');

      $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
      $image->save();

      auth()->user()->posts()->create([
        'caption' => $data['caption'],
        'image' => $imagePath,
      ]);

      //\App\Models\Post::create($data);

      //$post = new \App\Post();
      // $post->caption = $data['caption'];
      // $post->save();
      // $post->image = $data['image'];

      //dd(request()->all());

      return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Models\Post $post)
    {
      //dd($post);
      return view('posts.show', compact('post'));
    }
}
