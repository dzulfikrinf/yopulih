<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user',
        'content',
        'created_at',
        'updated_at',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post');
    }
}
