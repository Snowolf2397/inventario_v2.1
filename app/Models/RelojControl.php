<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RelojControl
 *
 * @property $id
 * @property $reloj_marca_id
 * @property $reloj_modelo_id
 * @property $reloj_ubicacion_id
 * @property $reloj_departamento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Marca $marca
 * @property Modelo $modelo
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RelojControl extends Model
{
    
    static $rules = [
		'reloj_marca_id' => 'required',
		'reloj_modelo_id' => 'required',
		'reloj_ubicacion_id' => 'required',
		'reloj_departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['reloj_marca_id','reloj_modelo_id','reloj_ubicacion_id','reloj_departamento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'reloj_departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'reloj_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'reloj_modelo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'reloj_ubicacion_id');
    }
    

}
