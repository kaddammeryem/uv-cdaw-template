<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Category extends Eloquent
{
    protected $table='categories';
    protected $connection = 'mysql';
    protected $primaryKey = 'id'; 
  
    use HasFactory;
}
