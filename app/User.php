<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Region;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    protected $fillable = [
        'name', 'cargo', 'email', 'password', 'region_id',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
