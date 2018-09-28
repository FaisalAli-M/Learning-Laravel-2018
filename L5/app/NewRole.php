<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewRole extends Model
{
    //
        public function newusers()
    {
        return $this->belongsToMany('App\NewUser')->using('App\newrole_newuser');
    }
}
