<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesPermission extends Model
{
    use HasFactory;

    protected $fillable = 
    ['permission_id', 
     'role_id',
     ];
}
