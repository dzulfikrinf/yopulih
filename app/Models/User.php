<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable

{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'role',
        'email',
        'name',
        'password',
        'photo',
        'created_at',
        'updated_at',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function psikolog()
    {
        return $this->hasOne(Psikolog::class);
    }

    public function clients()
    {
        return $this->hasMany(ClientList::class, 'user');
    }

    public function stressTests()
    {
        return $this->hasMany(StressTest::class);
    }

    public function messagesSent()
    {
        return $this->hasMany(Message::class, 'sender');
    }

    public function messagesReceived()
    {
        return $this->hasMany(Message::class, 'receiver');
    }
}
