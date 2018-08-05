<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
	protected $fillable = [
        'name', 'subrubro',
    ];
    
	public function macrozona()
    {
        return $this->hasMany(Macrozona::class);
    }
}
