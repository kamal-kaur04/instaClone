<?php

namespace App\Models;
//namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function profileImage()
    {
      // code...
      $imagePath = ($this->image) ? $this->image : 'profile/rsgSQMup8zgqXrQywAex73NoiWTwS2dfITN6MwXo.png';
      return '/storage/' . $imagePath;
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
