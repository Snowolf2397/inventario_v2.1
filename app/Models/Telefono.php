<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Telefono
 *
 * @property $telefonos_modelo_id
 * @property $numero_telefono
 * @property $compania
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario[] $funcionarios
 * @property Modelo $modelo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Telefono extends Model
{
    
    static $rules = [
		'telefonos_modelo_id' => 'required',
		'numero_telefono' => 'required',
		'compania' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['telefonos_modelo_id','numero_telefono','compania'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function funcionarios()
    {
        return $this->hasMany('App\Models\Funcionario', 'funcionarios_telefono_id', 'numero_telefono');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'telefonos_modelo_id');
    }
    

}
