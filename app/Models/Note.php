<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table='notes';
    protected $fillable=['id_user','id_pharmacie','messages'];
    protected $with=['imageuser'];

    
public function imageuser(){
    return $this->belongsTo(User::class,'id_user','id');
}

   public function pharmacie(){
    return $this->belongsTo(pharmacie::class,'id_pharmacie','id');
   }
}

