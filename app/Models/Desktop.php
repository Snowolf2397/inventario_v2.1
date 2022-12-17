<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Desktop
 *
 * @property $id
 * @property $desktops_procesador_id
 * @property $almacenamiento
 * @property $cant_almacenamiento
 * @property $cant_ram
 * @property $desktops_sistema_operativo_id
 * @property $desktops_ubicacion_id
 * @property $desktops_funcionario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario $funcionario
 * @property Procesadore $procesadore
 * @property SistemasOperativo $sistemasOperativo
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Desktop extends Model
{
    
    static $rules = [
		'desktops_procesador_id' => 'required',
		'almacenamiento' => 'required',
		'cant_almacenamiento' => 'required',
		'cant_ram' => 'required',
		'desktops_sistema_operativo_id' => 'required',
		'desktops_ubicacion_id' => 'required',
		'desktops_funcionario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['desktops_procesador_id','almacenamiento','cant_almacenamiento','cant_ram','desktops_sistema_operativo_id','desktops_ubicacion_id','desktops_funcionario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function funcionario()
    {
        return $this->hasOne('App\Models\Funcionario', 'rut', 'desktops_funcionario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function procesadore()
    {
        return $this->hasOne('App\Models\Procesadore', 'id', 'desktops_procesador_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sistemasOperativo()
    {
        return $this->hasOne('App\Models\SistemasOperativo', 'id', 'desktops_sistema_operativo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'desktops_ubicacion_id');
    }
    

}
