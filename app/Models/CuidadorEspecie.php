<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuidadorEspecie extends Model
{
    use HasFactory;
    protected $table = 'cuidadores_especies';
    protected $fillable = [
        'id_especie',
        'id_cuidador'
    ];
    public function Especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie');
    }
    public function Cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }

}
