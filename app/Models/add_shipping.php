<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class add_shipping extends Model
{
    use HasFactory;
    use softDeletes;

    protected $cof = "add_shipping";
    protected $caf = [];

    public function commande(){
        return $this->belongsTo(commande::class,'id_commande','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}