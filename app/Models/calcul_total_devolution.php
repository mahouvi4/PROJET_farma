<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calcul_total_devolution extends Model
{
    use HasFactory;
    protected $caloco = "calcul_total_devolutions";
    protected $caloca = [];

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }

    public function pagamento(){
        return $this->belongsTo(pagamento::class,'id_pagamento','id');
    }
}
