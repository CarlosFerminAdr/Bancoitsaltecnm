<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $tipo_status
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyectograma[] $proyectogramas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{

    static $rules = [
		'tipo_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectogramas()
    {
        return $this->hasMany('App\Models\Proyectograma', 'estado_id', 'id');
    }

}
