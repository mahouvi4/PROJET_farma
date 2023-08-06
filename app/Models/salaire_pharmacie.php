<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaire_pharmacie extends Model
{
    use HasFactory;
    

    protected $ong = "salaire_pharmacies";
    protected $ang = [];

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }
}
