<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class position_user extends Model
{
    use HasFactory;
    use softDeletes;

    protected $pol = "position_users";
    protected $pil = [];
}
