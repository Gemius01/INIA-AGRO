<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boletin extends Model
{
    //
    protected $table = 'boletines';

    protected $fillable = [
        'region_id', 'estado', 'publicacion_id',
    ];

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    
    public function secciones()
    {
        return $this->belongsToMany(Seccion::class)->withPivot('contenido','id','editando');
    }

    public function subsecciones()
    {
        return $this->hasMany(Subseccion::class);
    }

}
