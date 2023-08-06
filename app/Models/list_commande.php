<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class list_commande extends Model
{
    use HasFactory;
    use softDeletes;

    protected $onox = "list_commandes";
    protected $onax = [];

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }

    public function medico(){
        return $this->belongsTo(medico::class,'id_medico','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function commande(){
        return $this->belongsTo(commande::class,'id_commande','id');
    }
}

