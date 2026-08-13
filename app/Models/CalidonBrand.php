<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalidonBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'fsize',
        'fbottle',
        'ssize',
        'sbottle',
        'tsize',
        'tbottle',
        'ftsize',
        'ftbottle',
        'fimage',
        'simage',
        'timage',
        'ftimage',
    ];
}
