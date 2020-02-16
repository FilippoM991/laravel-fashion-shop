<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $table = "clothes";
    // aggiungo questa parte per poter usarela funzione fill( )
    protected $fillable = ['description','size','gender','color'];
}
