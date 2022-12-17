<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Procesadore
 *
 * @property $id
 * @property $procesadores_marca_id
 * @property $procesadores_modelo_id
 * @property $frecuencia
 * @property $nucleos
 * @property $hilos
 * @property $created_at
 * @property $updated_at
 *
 * @property Allinone[] $allinones
 * @property Desktop[] $desktops
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Notebook[] $notebooks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Procesadore extends Model
{
    
    static $rules = [
		'procesadores_marca_id' => 'required',
		'procesadores_modelo_id' => 'required',
		'frecuencia' => 'required',
		'nucleos' => 'required',
		'hilos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['procesadores_marca_id','procesadores_modelo_id','frecuencia','nucleos','hilos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allinones()
    {
        return $this->hasMany('App\Models\Allinone', 'allinone_procesador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desktops()
    {
        return $this->hasMany('App\Models\Desktop', 'desktops_procesador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'procesadores_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'procesadores_modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany('App\Models\Notebook', 'notebooks_procesador_id', 'id');
    }
    

}
