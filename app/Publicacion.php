<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	protected $table = 'publicaciones';

	protected $fillable = [
        'mes_id', 'año',
    ];

    public function boletines()
    {
    	return $this->hasMany(Boletin::class);
    }

    public function resumen()
    {
    	return $this->hasOne(Resumen::class);
    }

    public function mes()
    {
        return $this->belongsTo(Mes::class);
    }
}
