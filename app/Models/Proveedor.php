<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedors';

    protected $fillable = [
        'name',
        'email',
        'password', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brake()
    {
        return $this->hasMany(Brake::class);
    }

    public function engine()
    {
        return $this->hasMany(Engine::class);
    }

    public function light()
    {
        return $this->hasMany(Light::class);
    }

    public function sideskirt()
    {
        return $this->hasMany(Sideskirt::class);
    }

    public function spoiler()
    {
        return $this->hasMany(Spoiler::class);
    }

    public function suspension()
    {
        return $this->hasMany(Suspension::class);
    }

    public function wheel()
    {
        return $this->hasMany(Wheel::class);
    }

}
