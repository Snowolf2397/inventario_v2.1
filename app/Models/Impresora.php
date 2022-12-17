<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Impresora
 *
 * @property $id
 * @property $impresoras_marca_id
 * @property $impresoras_modelo_id
 * @property $impresoras_ubicacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Impresora extends Model
{
    
    static $rules = [
		'impresoras_marca_id' => 'required',
		'impresoras_modelo_id' => 'required',
		'impresoras_ubicacion_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['impresoras_marca_id','impresoras_modelo_id','impresoras_ubicacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'impresoras_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'impresoras_modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'impresoras_ubicacion_id');
    }
    

}
