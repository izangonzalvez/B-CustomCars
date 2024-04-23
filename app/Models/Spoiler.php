<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spoiler extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'price',
        'size',
        'material',
 
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
