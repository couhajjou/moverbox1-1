<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    public function users()
    {
      return $this->hasMany(User::class);
    }
}
