<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;


class commande extends Model
{
    use HasFactory;
    //use softDeletes;

    protected $foxa = "commandes";
    protected $foxo = [];

    public function list_com(){
        return $this->hasMany(list_commande::class,'id_commande','id');
    }

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }



}