<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSession extends Model
{
    use HasFactory;
    protected $table = 'user_sessions';

    protected $fillable = [
        'user_id', 'token', 'start_at', 'action_at'
    ];

    public function user()
    {
        $this->belongsTo(User::class, 'user_id', 'id');
    }
}
