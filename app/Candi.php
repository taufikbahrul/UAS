<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candi extends Model
{
    protected $fillable = [
        'image', 'title', 'label', 'paragraf',
    ];
}
