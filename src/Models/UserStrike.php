<?php

namespace Rekt\Models;

use Illuminate\Database\Eloquent\Model;

class UserStrike extends Model {
   
    public $guared = ['id'];

    public function users() 
    {
        return $this->hasMany(config('rekt.models.user'));
    }
}