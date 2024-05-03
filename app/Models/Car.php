<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'horn',
        'post',
        'user_id',
        'wheel_id',
        'engine_id',
        'suspension_id',
        'brake_id',
        'exhaustpipe_id',
        'light_id',
        'spoiler_id',
        'sideskirt_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wheel()
    {
        return $this->belongsTo(Wheel::class);
    }

    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }

    public function suspension()
    {
        return $this->belongsTo(Suspension::class);
    }

    public function brake()
    {
        return $this->belongsTo(Brake::class);
    }

    public function exhaustpipe()
    {
        return $this->belongsTo(ExhaustPipe::class);
    }

    public function light()
    {
        return $this->belongsTo(Light::class);
    }

    public function spoiler()
    {
        return $this->belongsTo(Spoiler::class);
    }

    public function sideskirt()
    {
        return $this->belongsTo(Sideskirt::class);
    }
}
