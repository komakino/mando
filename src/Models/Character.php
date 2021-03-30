<?php

namespace Komakino\Mando\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model 
{
    protected $casts = [
        'aliases' => 'array',
    ];
}