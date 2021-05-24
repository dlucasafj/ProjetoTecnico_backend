<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federacao extends Model
{
    protected $table='federacao';
    use HasFactory;


    public function empresas(){
        return $this->hasMany(Empresa::class, 'federacao_id', 'id'); 
    }
}
