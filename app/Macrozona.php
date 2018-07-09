<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macrozona extends Model
{
	
	public function users()
    {
        return $this->belongsToMany(User::class);
    }

	public function rubro()
    {
        return $this->belongsTo(Rubro::class);
    }
    protected $fillable = [
        'name', 'region_id', 'rubro_id',
    ];
}
