<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    protected $table = 'estudiantes';
    protected $primarykey = 'id'; 
    protected $fillable = [
        'users_id', 'electivas_id',
    ];

    public function Users()
    {
    	return $this->belongsTo('App\User');
    }

    public function Electivas()
    {
    	return $this->hasMany('App\Electivas');
    }
}
