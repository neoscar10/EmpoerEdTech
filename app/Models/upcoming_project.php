<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class upcoming_project extends Model
{
    protected $fillable = ['title', 'description', 'image', 'key_points'];

    protected $casts = [
        'key_points' => 'array',
    ];
}
