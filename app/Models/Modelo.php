<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modelo
 *
 * @property $id
 * @property $modelos_marca_id
 * @property $modelo
 * @property $created_at
 * @property $updated_at
 *
 * @property Allinone[] $allinones
 * @property Impresora[] $impresoras
 * @property Marca $marca
 * @property Notebook[] $notebooks
 * @property Procesadore[] $procesadores
 * @property RelojControl[] $relojControls
 * @property Router[] $routers
 * @property Telefono[] $telefonos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modelo extends Model
{
    
    static $rules = [
		'modelos_marca_id' => 'required',
		'modelo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['modelos_marca_id','modelo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allinones()
    {
        return $this->hasMany('App\Models\Allinone', 'allinone_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'impresoras_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'modelos_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany('App\Models\Notebook', 'notebooks_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function procesadores()
    {
        return $this->hasMany('App\Models\Procesadore', 'procesadores_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relojControls()
    {
        return $this->hasMany('App\Models\RelojControl', 'reloj_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function routers()
    {
        return $this->hasMany('App\Models\Router', 'routers_modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telefonos()
    {
        return $this->hasMany('App\Models\Telefono', 'telefonos_modelo_id', 'id');
    }
    

}
