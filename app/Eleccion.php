<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
	

	protected $table = 'eleccion';
	
    protected $fillable = [
         'publicacion_id',
    ];
}
