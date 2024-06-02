<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientList extends Model
{
    use HasFactory;

    protected $table = 'client_list';

    protected $fillable = [
        'user',
        'psikolog',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function psikolog()
    {
        return $this->belongsTo(User::class, 'psikolog');
    }
}
