<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	
    protected $fillable = [
        'name', 'country_id',
    ];

	public function users()
	{
		return $this->belongsToMany(User::class);
	}

	public function resumenes()
	{
		return $this->belongsToMany(Resumen::class);
	}

}
