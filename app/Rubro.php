<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
	public function macrozona()
    {
        return $this->hasMany(Macrozona::class);
    }
	
    protected $fillable = [
        'name',
    ];
}
