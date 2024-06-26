<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatAssistance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'message',
        'response',
        'user_id',
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
