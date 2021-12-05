<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class History extends Eloquent
{
    protected $table='history';
    protected $connection = 'mysql';
    //protected $primaryKey = 'id'; default
  
    use HasFactory;
}
