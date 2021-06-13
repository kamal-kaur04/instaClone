<?php

namespace App\Http\Controllers;
//namespace App\Models\User;
use App\Models\User;

use Illuminate\Http\Request;

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

    public function edit(User $user)
    {
      return view('profiles.edit', compact('user'));
    }
}
