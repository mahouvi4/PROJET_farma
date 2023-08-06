<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;
    
    protected $divx = "contactos";
    protected $vodi = [];

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }
}
