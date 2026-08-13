<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'afimage',
        'asimage',
        'atimage',
        'aftimage',
        'afthimage',
        'asximage',
        'asvimage',
        'aetimage',
    ];
}
