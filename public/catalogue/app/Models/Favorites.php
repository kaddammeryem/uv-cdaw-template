<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Favorites extends Eloquent
{
    protected $table='favorites';
    protected $connection = 'mysql';
    //protected $primaryKey = 'id'; default
  
    use HasFactory;
}
