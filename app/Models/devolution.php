<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devolution extends Model
{
    use HasFactory;
    protected $devxi = "devolution";
    protected $ivoxip = [];

    public function list_commande(){
        return $this->belongsTo(list_commande::class,'id_list','id');
    }


    public function commande(){
        return $this->belongsTo(commande::class,'id_commande','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function medico(){
        return $this->belongsTo(medico::class,'id_medico','id');
    }

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }

    public function pagamento(){
        return $this->belongsTo(list_commande::class,'id_pagamento','id');
    }

    
  

}
