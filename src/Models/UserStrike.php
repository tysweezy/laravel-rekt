<?php

namespace Tysweezy\Rekt\Models;

use Illuminate\Database\Eloquent\Model;

class UserStrike extends Model {
   
    public $guarded = ['id'];

    public function users() 
    {
        return $this->hasMany(config('rekt.models.user'));
    }
}