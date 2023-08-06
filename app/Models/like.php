<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    protected $hivo = "likes";
    protected $hiva = [];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }


    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }
}
