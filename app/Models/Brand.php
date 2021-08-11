<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'brand',
        'price',
        'description',
        'measurement',
        'visibility',
        'category',
        'createdBy',
    ];
}
