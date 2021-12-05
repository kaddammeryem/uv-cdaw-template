<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Comments extends Eloquent
{
    protected $table='comments';
    protected $connection = 'mysql';
  
    use HasFactory;
}
