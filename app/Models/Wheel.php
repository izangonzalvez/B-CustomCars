<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wheel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'inch',
        'price',
        'user_id',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
