<?php

namespace App\Http\Controllers;
//namespace App\Models\User;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index($user)
    {
        //dd($user);
        $user = User::findOrFail($user);
        return view('profiles.index', [
          'user' => $user,
        ]);
    }
}
