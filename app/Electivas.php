<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Electivas extends Model
{
    protected $table = 'electivas';
    protected $primarykey = 'id'; 
    protected $fillable = [
        'nombre', 'profesor_id', 'descripcion', 'cupos_disponibles', 
    ];

    public function Estudiante()
    {
        return $this->hasMany('App\Estudiantes');
    }

    public function Profesor()
    {
    	return $this->belongsTo('App\Profesor');
    }
}
