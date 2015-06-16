<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twip extends Model
{
    protected $fillable = [
        'title',
        'twip',
        'published_by'
    ];
}
