<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SistemasOperativo
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Desktop[] $desktops
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SistemasOperativo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desktops()
    {
        return $this->hasMany('App\Models\Desktop', 'desktops_sistema_operativo_id', 'id');
    }
    

}
