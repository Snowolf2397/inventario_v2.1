<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Allinone[] $allinones
 * @property Impresora[] $impresoras
 * @property Modelo[] $modelos
 * @property Monitore[] $monitores
 * @property Mouse[] $mouses
 * @property Notebook[] $notebooks
 * @property Procesadore[] $procesadores
 * @property RelojControl[] $relojControls
 * @property Router[] $routers
 * @property Teclado[] $teclados
 * @property Televisore[] $televisores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allinones()
    {
        return $this->hasMany('App\Models\Allinone', 'allinone_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'impresoras_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany('App\Models\Modelo', 'modelos_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monitores()
    {
        return $this->hasMany('App\Models\Monitore', 'monitores_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mouses()
    {
        return $this->hasMany('App\Models\Mouse', 'mouses_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany('App\Models\Notebook', 'notebooks_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function procesadores()
    {
        return $this->hasMany('App\Models\Procesadore', 'procesadores_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relojControls()
    {
        return $this->hasMany('App\Models\RelojControl', 'reloj_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function routers()
    {
        return $this->hasMany('App\Models\Router', 'routers_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teclados()
    {
        return $this->hasMany('App\Models\Teclado', 'teclados_marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function televisores()
    {
        return $this->hasMany('App\Models\Televisore', 'televisores_marca_id', 'id');
    }
    

}
