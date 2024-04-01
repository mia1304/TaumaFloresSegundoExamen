<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Recinto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'recintos';
    protected $fillable = [
        'nombre',
        'tipo_recinto'
    ];
    public function AnimalRecinto()
    {
        return $this->hasMany(AnimalRecinto::class, 'id_recinto');
    }
}
