<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macrozona extends Model
{
	protected $fillable = [
        'name', 'region_id', 'rubro_id',
    ];

	public function users()
    {
        return $this->belongsToMany(User::class);
    }

	public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }
    
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function subsecciones()
    {
        return $this->belongsToMany(Subseccion::class);
    }

    public function comunas()
    {
        return $this->belongsToMany(Comuna::class);
    }

}
