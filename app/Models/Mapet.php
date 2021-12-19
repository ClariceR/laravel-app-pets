<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapet extends Model
{
    protected $fillable = [
        'avatar',
        'name'
    ];

    use HasFactory;
}
