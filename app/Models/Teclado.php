<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teclado
 *
 * @property $id
 * @property $teclados_marca_id
 * @property $teclados_ubicacion_id
 * @property $teclados_funcionario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario $funcionario
 * @property Marca $marca
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teclado extends Model
{
    
    static $rules = [
		'teclados_marca_id' => 'required',
		'teclados_ubicacion_id' => 'required',
		'teclados_funcionario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teclados_marca_id','teclados_ubicacion_id','teclados_funcionario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function funcionario()
    {
        return $this->hasOne('App\Models\Funcionario', 'rut', 'teclados_funcionario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'teclados_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'teclados_ubicacion_id');
    }
    

}
