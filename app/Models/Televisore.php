<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Televisore
 *
 * @property $id
 * @property $televisores_marca_id
 * @property $televisores_ubicacion_id
 * @property $pulgadas
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Televisore extends Model
{
    
    static $rules = [
		'televisores_marca_id' => 'required',
		'televisores_ubicacion_id' => 'required',
		'pulgadas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['televisores_marca_id','televisores_ubicacion_id','pulgadas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'televisores_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'televisores_ubicacion_id');
    }
    

}
