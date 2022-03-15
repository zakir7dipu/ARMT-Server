<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = ['thumb', 'image', 'thumb_image', 'video_id', 'title', 'sub_title', 'description'];
}
