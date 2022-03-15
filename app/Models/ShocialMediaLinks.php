<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShocialMediaLinks extends Model
{
    use HasFactory;

    protected $fillable = ['facebook', 'whatsapp', 'linkedin', 'tweeter', 'pinterest'];
}
