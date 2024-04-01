<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalActividad extends Model
{
    use HasFactory;
    protected $table = 'animales_actividades';
    protected $fillable = [
        'id_animal',
        'id_actividad'
    ];
    public function Animal(){
        return $this -> belongsTo(Animal::class, 'id_animal');
    }
    public function Actividad(){
        return $this -> belongsTo(Actividad::class, 'id_actividad');
    }
}
