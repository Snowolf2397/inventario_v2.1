<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mouse
 *
 * @property $id
 * @property $mouses_marca_id
 * @property $mouses_ubicacion_id
 * @property $mouses_funcionario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Funcionario $funcionario
 * @property Marca $marca
 * @property Ubicacione $ubicacione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mouse extends Model
{
    
    static $rules = [
		'mouses_marca_id' => 'required',
		'mouses_ubicacion_id' => 'required',
		'mouses_funcionario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mouses_marca_id','mouses_ubicacion_id','mouses_funcionario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function funcionario()
    {
        return $this->hasOne('App\Models\Funcionario', 'rut', 'mouses_funcionario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'mouses_marca_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ubicacione()
    {
        return $this->hasOne('App\Models\Ubicacione', 'id', 'mouses_ubicacion_id');
    }
    

}
