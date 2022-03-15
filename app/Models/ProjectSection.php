<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSection extends Model
{
    use HasFactory;

    protected $fillable = ['thumb', 'title', 'sub_title', 'btn_text', 'btn_url'];
}
