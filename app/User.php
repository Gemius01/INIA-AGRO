<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Region;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    protected $fillable = [
        'name', 'cargo', 'email', 'password', 'region_id', 'cri',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function regiones()
    {
        return $this->belongsToMany(Region::class);
    }

    public function secciones()
    {
        return $this->belongsToMany(Seccion::class);
    }

    public function macrozonas()
    {
        return $this->belongsToMany(Macrozona::class);
    }

    public function alertas()
    {
        
    }
  
}
