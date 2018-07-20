<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	protected $table = 'publicaciones';

	protected $fillable = [
        'mes', 'año',
    ];

    public function boletines()
    {
    	return $this->hasMany(Boletin::class);
    }

    public function resumen()
    {
    	return $this->hasOne(Resumen::class);
    }
}
