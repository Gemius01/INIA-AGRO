<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

	public function user ()
	{
		return $this->hasMany(User::class);
	}
	
    protected $fillable = [
        'name', 'country_id',
    ];
}
