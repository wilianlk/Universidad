<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';
    protected $primarykey = 'id'; 
    protected $fillable = [
        'nombre', 'apellido', 'descripcion', 'codigo_profesor',
    ];

    public function Electivas()
    {
        return $this->hasMany('App\Electivas');
    }
}
