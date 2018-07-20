<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resumen extends Model
{
    protected $table = 'resumenes';

    protected $fillable = [
        'publicacion_id',
    ];

    public function publicacion()
    {
    	return $this->belongsTo(Publicacion::class);
    }

    public function regiones()
	{
		return $this->belongsToMany(Region::class);
	}
}
