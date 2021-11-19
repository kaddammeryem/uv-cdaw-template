<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Film extends Eloquent
{
    protected $table='films';
    protected $connection = 'mysql';
    //protected $primaryKey = 'id'; default
  
    use HasFactory;
}
