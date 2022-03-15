<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventSection extends Model
{
    use HasFactory;

    protected $fillable = ['thumb', 'title', 'sub_title'];
}
