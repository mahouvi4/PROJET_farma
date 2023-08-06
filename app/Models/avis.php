<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avis extends Model
{
    use HasFactory;
    use softDeletes;

    protected $gom = "avis";
    protected  $gam = [];

    public function user(){
        return $this->belongsTo(user::class,'id_user','id');
    }
}
