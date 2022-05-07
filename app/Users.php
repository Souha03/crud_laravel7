<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'birth', 'phone', 'email',  'password','role'
      ];

      public function setPasswordAttribute($password)
      {   
          $this->attributes['password'] = bcrypt($password);
      }
  
}
