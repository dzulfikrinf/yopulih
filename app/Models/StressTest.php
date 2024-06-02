<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StressTest extends Model
{
    use HasFactory;

    protected $table = 'stress_tests';

    protected $fillable = [
        'user',
        'question',
        'answer',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question');
    }
}
