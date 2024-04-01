<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalEspecie extends Model
{
    use HasFactory;
    protected $table = 'animales_especies';
    protected $fillable = [
        'id_animal',
        'id_especie'
    ];
    public function Animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function Especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie');
    }
}
