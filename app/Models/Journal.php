<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title',
        'category',
        'publish_date',
        'image',
        'is_active',
    ];
}
