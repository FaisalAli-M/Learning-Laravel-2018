<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    //
    
    public function newroles()
    {
        return $this->belongsToMany('App\NewRole')->using('App\newrole_newuser');
    }
}
