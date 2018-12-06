<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = "comunas";

    protected $fillable = [
        'nombre', 'codigo', 'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function macrozonas()
    {
        return $this->belongsToMany(Macrozona::class);
    }
}
