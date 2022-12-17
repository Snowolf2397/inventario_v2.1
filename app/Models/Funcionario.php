<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Funcionario
 *
 * @property $rut
 * @property $nombres
 * @property $apellidos
 * @property $correo
 * @property $funcionarios_telefono_id
 * @property $funcionarios_departamento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Allinone[] $allinones
 * @property Departamento $departamento
 * @property Desktop[] $desktops
 * @property Monitore[] $monitores
 * @property Mouse[] $mouses
 * @property Notebook[] $notebooks
 * @property Teclado[] $teclados
 * @property Telefono $telefono
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Funcionario extends Model
{
    
    static $rules = [
		'rut' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'correo' => 'required',
		'funcionarios_telefono_id' => 'required',
		'funcionarios_departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rut','nombres','apellidos','correo','funcionarios_telefono_id','funcionarios_departamento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allinones()
    {
        return $this->hasMany('App\Models\Allinone', 'allinone_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'funcionarios_departamento_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desktops()
    {
        return $this->hasMany('App\Models\Desktop', 'desktops_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monitores()
    {
        return $this->hasMany('App\Models\Monitore', 'monitores_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mouses()
    {
        return $this->hasMany('App\Models\Mouse', 'mouses_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany('App\Models\Notebook', 'notebooks_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teclados()
    {
        return $this->hasMany('App\Models\Teclado', 'teclados_funcionario_id', 'rut');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function telefono()
    {
        return $this->hasOne('App\Models\Telefono', 'numero_telefono', 'funcionarios_telefono_id');
    }
    

}
