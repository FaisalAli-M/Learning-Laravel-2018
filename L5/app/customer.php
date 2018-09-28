<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    // for overide laravel default convention table name , primarykey name , created and updated at time stampe write
    // for change table name write. protected $table = 'new table name';
   // protected $primarykey = 'c_id'; // for change table primary key field name write.
    public $timestamps = false; // for overide created and updated timestamp
    
    // Mass Assignment is k liye 2property hoti hai 1) fillable 2)guarded dono mai sy koi b use krskty hai
    // Fiillable ki array mai jin filled k naam dengy woh fill hoskti hongi or agr blank dengy to koi b fill nhe hoskygi new record add nhe hoga like protected $fillable = ['name','email'] or []
    // Guarded ki arry ager blank hogi to mean sari filled fill hoskti hen or agy koi name dengy to woh field fill hogi baki sb hoskti hogi like protected $guarded = ['pass'] or []
    
    protected $guarded = [];

}
