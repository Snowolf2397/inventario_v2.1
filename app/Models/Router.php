<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Router
 *
 * @property $id
 * @property $routers_marca_id
 * @property $routers_modelo_id
 * @property $frecuencia
 * @property $compania
 * @property $routers_ubicacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Router extends Model
{
    
    static $rules = [
		'routers_marca_id' => 'required',
		'routers_modelo_id' => 'required',
		'frecuencia' => 'required',
		'compania' => 'required',
		'routers_ubicacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['routers_marca_id','routers_modelo_id','frecuencia','compania','routers_ubicacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'routers_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'routers_modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'routers_ubicacion_id');
    }
    

}
