<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Actividad extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'actividades';
    protected $fillable = [
        'dia',
        'hora'
    ];
    public function AnimalActividad ()
    {
        return $this -> hasMany(AnimalActividad::class, 'id_actividad');
    }
}
