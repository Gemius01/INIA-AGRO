<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
	
    protected $fillable = [
        'name', 'country_id',
    ];
}
