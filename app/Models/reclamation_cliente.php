<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation_cliente extends Model
{
    use HasFactory;
    protected $reclix = "reclamation_clientes";
    protected $reclax = [];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }
}
