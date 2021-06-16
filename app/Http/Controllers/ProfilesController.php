<?php

namespace App\Http\Controllers;
//namespace App\Models\User;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    {
        //dd($user);
        // $user = User::findOrFail($user);
        // return view('profiles.index', [
        //   'user' => $user,
        // ]);

        //compact way
        return view('profiles.index', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
      //dd($user->id);
      $this->authorize('update', $user->profile);

      return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
      // code...
      //Paginator::useBootstrap();

      $this->authorize('update', $user->profile);

      $data = request()->validate([
        'title' => 'required' ,
        'description' => 'required',
        'url' => 'url',
        'image' => '',
      ]);

      //dd($data);

      if(request('image')){
        $imagePath = request('image')->store('profile','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();

        $imageArray = ['image' => $imagePath];
      }

      // dd(array_merge(
      //   $data,
      //   ['image' => $imagePath]
      // ));)

      auth()->user()->profile->update(array_merge(
        $data,
        $imageArray ?? []
      ));

      return redirect("/profile/{$user->id}");

    }

}
