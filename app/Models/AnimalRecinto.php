<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalRecinto extends Model
{
    use HasFactory;
    protected $table = 'animales_recintos';
    protected $fillable = [
        'id_animal',
        'id_recinto'
    ];
    public function Animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function Recinto()
    {
        return $this->belongsTo(Recinto::class, 'id_recinto');
    }
}
