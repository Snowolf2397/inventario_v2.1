<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notebook
 *
 * @property $id
 * @property $notebooks_marca_id
 * @property $notebooks_modelo_id
 * @property $almacenamiento
 * @property $can_almacenamiento
 * @property $can_ram
 * @property $notebooks_procesador_id
 * @property $notebooks_ubicacion_id
 * @property $notebooks_funcionario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario $funcionario
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Procesadore $procesadore
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notebook extends Model
{
    
    static $rules = [
		'notebooks_marca_id' => 'required',
		'notebooks_modelo_id' => 'required',
		'almacenamiento' => 'required',
		'can_almacenamiento' => 'required',
		'can_ram' => 'required',
		'notebooks_procesador_id' => 'required',
		'notebooks_ubicacion_id' => 'required',
		'notebooks_funcionario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['notebooks_marca_id','notebooks_modelo_id','almacenamiento','can_almacenamiento','can_ram','notebooks_procesador_id','notebooks_ubicacion_id','notebooks_funcionario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function funcionario()
    {
        return $this->hasOne('App\Models\Funcionario', 'rut', 'notebooks_funcionario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'notebooks_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'notebooks_modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function procesadore()
    {
        return $this->hasOne('App\Models\Procesadore', 'id', 'notebooks_procesador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'notebooks_ubicacion_id');
    }
    

}
