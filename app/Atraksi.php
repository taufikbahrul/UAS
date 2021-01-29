<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atraksi extends Model
{
    protected $fillable = [
        'image', 'text',
    ];
}
