<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sede
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @property Ubicacione[] $ubicaciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sede extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ubicaciones()
    {
        return $this->hasMany('App\Models\Ubicacione', 'ubicaciones_sede_id', 'id');
    }
    

}
