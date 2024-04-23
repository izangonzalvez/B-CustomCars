<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'horn',
        'user_id',
        'wheels_id',
        'engines_id',
        'suspension_id',
        'brakes_id',
        'exhaustpipe_id',
        'lights_id',
        'spoiler_id',
        'sideskirts_id',
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
