<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userf extends Model
{
    //
    
    public function country()
    {
        return $this->belongsTo('\App\country');
    }
    
    public function postsf()
    {
        return $this->hasMany('\App\postf');
    }
}
