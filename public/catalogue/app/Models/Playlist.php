<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Eloquent;

class Playlist extends Eloquent
{
    protected $table='playlist';
    protected $connection = 'mysql';
    //protected $primaryKey = 'id'; default
  
    use HasFactory;
}