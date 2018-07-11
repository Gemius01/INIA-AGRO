<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
	
	public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function boletines()
    {
        return $this->belongsToMany(Boletin::class);
    }
    protected $fillable = [
        'name',
    ];
}
