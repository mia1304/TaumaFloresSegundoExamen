<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'animales';
    protected $fillable = [
        'nombre',
        'edad'
    ];
    public function AnimalActividad ()
    {
        return $this -> hasMany(AnimalActividad::class, 'id_animal');
    }
    public function AnimalEspecie()
    {
        return $this->hasMany(AnimalEspecie::class, 'id_animal');
    }
    public function AnimalRecinto()
    {
        return $this->hasMany(AnimalRecinto::class, 'id_animal');
    }
}
