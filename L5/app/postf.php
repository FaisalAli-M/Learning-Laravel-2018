<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postf extends Model
{
    //
    public function usersf()
    {
        return $this->belongsTo('\App\userf');
    }
    
}
