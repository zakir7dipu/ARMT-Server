<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSection extends Model
{
    use HasFactory;

    protected $table = 'feature_sections';

    protected $fillable = ['thumb', 'description', 'button_text', 'button_url'];
}
