<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pharmacie extends Model
{
    use HasFactory;
    use softDeletes;

    protected $alx = "pharmacies";
    protected $olx = [];
    public function imageuser(){
        return $this->belongsTo(User::class,'id_user','id');
    }
    
}
