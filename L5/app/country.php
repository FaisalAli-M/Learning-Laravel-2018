<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    public function usersf()
    {
        return $this->hasMany('\App\userf');
    }
    
    public function postsf()
    {
        return $this->hasManyThrough('\App\postf' , '\App\userf' , 'country_id' , 'user_id' , 'id' , 'id');
    }
}
