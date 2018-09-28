<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DependencyIModel extends Model
{
    public function __construct()
    {
        echo "COnstructor Method from DependencyIModel Model <br>"; // only for check this model constructor work and Dependency injection and type Hinting work perfectly
    }
}
