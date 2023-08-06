<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class medico extends Model
{
    use HasFactory;
    use softDeletes;

    protected $mox = "medicos";
    protected $maxx = [];

    public function pharmacie(){
        return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
    }

    public function imageuser(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
