<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $table = 'psikolog';

    protected $fillable = [
        'user',
        'description',
        'title',
        'photo',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function clients()
    {
        return $this->hasMany(ClientList::class, 'psikolog');
    }
}
