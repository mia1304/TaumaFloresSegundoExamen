<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'especies';
    protected $fillable = [
        'tipo_especie'
    ];
    public function AnimalEspecie()
    {
        return $this->hasMany(AnimalEspecie::class, 'id_especie');
    }
    public function CuidadorEspecie()
    {
        return $this->hasMany(CuidadorEspecie::class, 'id_especie');
    }
}
