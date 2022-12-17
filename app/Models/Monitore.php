<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Monitore
 *
 * @property $id
 * @property $monitores_marca_id
 * @property $entrada
 * @property $alimentacion
 * @property $monitores_ubicacion_id
 * @property $monitores_funcionario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario $funcionario
 * @property Marca $marca
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Monitore extends Model
{
    
    static $rules = [
		'monitores_marca_id' => 'required',
		'entrada' => 'required',
		'alimentacion' => 'required',
		'monitores_ubicacion_id' => 'required',
		'monitores_funcionario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['monitores_marca_id','entrada','alimentacion','monitores_ubicacion_id','monitores_funcionario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function funcionario()
    {
        return $this->hasOne('App\Models\Funcionario', 'rut', 'monitores_funcionario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'monitores_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'monitores_ubicacion_id');
    }
    

}
