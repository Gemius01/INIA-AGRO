<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subseccion extends Model
{
	protected $table = 'subsecciones';
	protected $fillable = [
        'seccion_id', 'boletin_id', 
    ];
	
    public function seccion()
    {
    	return $this->belongsTo(Seccion::class);
    }

    public function boletin()
    {
    	return $this->belongsTo(Boletin::class);
    }

    public function macrozonas()
    {
    	return $this->belongsToMany(Macrozona::class)->withPivot('contenido', 'resumen', 'autor', 'email', 'id');
    }
}
