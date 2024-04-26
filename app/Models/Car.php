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
        return $this->belongsTo(User::class, 'author_id');
    }
    
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
