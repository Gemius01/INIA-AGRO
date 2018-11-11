<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
