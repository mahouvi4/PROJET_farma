<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $nio = "cards";
    protected $nia = [];

    public function medico(){
        return $this->belongsTo(medico::class,'id_medico','id');
    }

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }
}