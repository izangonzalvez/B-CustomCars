<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 1;
    const CUSTOMER = 2;
    const AUTHOR =3;
    const PROVEEDOR = 4;

    protected $fillable = [
        'id',
        'name',
    ];

}
