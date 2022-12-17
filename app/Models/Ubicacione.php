<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ubicacione
 *
 * @property $id
 * @property $nombre
 * @property $ubicaciones_sede_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Allinone[] $allinones
 * @property Desktop[] $desktops
 * @property Impresora[] $impresoras
 * @property Monitore[] $monitores
 * @property Mouse[] $mouses
 * @property Notebook[] $notebooks
 * @property RelojControl[] $relojControls
 * @property Router[] $routers
 * @property Sede $sede
 * @property Teclado[] $teclados
 * @property Televisore[] $televisores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ubicacione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ubicaciones_sede_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ubicaciones_sede_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allinones()
    {
        return $this->hasMany('App\Models\Allinone', 'allinone_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desktops()
    {
        return $this->hasMany('App\Models\Desktop', 'desktops_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impresoras()
    {
        return $this->hasMany('App\Models\Impresora', 'impresoras_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function monitores()
    {
        return $this->hasMany('App\Models\Monitore', 'monitores_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mouses()
    {
        return $this->hasMany('App\Models\Mouse', 'mouses_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany('App\Models\Notebook', 'notebooks_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function relojControls()
    {
        return $this->hasMany('App\Models\RelojControl', 'reloj_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function routers()
    {
        return $this->hasMany('App\Models\Router', 'routers_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Models\Sede', 'id', 'ubicaciones_sede_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teclados()
    {
        return $this->hasMany('App\Models\Teclado', 'teclados_ubicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function televisores()
    {
        return $this->hasMany('App\Models\Televisore', 'televisores_ubicacion_id', 'id');
    }
    

}
