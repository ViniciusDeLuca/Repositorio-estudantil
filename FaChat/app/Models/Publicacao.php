<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    
    protected $table = 'publicacao';

    public function autor()
    {
        return $this->belongsTo(Usuario::class, 'id_autor', 'id');
    }

    public function materia(){
        return $this->belongsTo(Materia::class, 'id_materia', 'id');
    }
}
