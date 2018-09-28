<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class U_Account extends Model
{
    //
    protected $fillable = [
        'name' ,'email' , 'pasword' , 'dob'
    ];
    
    // this is Accessor and it is use for display database specific column value in our spacified manner mean jis tarha hum us colum ki value display krwana chahty hen mean all letter in capital letter , lower case , first letter capital
    protected function getnameAttribute($value)
    {
        return strtoupper($value);
    }
    
      // this is Mutator and it is use for insert database specific column value in our spacified manner mean jis tarha hum us colum ki value set krwana chahty hen mean all letter in capital letter , lower case , first letter capital chahy user jaisy b likhy mgr save hamary pattern mai hog
    protected function setemailAttribute($value)
    {
        $this->attributes['email'] = ucwords($value); // ucwords first letter capital krta h 
    }
    
    //Define for use carbon class in custom column agr hum created at and update at k column k ilawa kisi column py mutator ki carbon class use krna chahty hen to usy phly model mai define krty hen us k bd carbon ki functionality run hoti h us column py
    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
    ];
}
