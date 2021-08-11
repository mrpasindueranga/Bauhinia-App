<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'size',
        'quantity',
        'price',
        'note',
        'date',
        'brand',
        'type',
        'createdBy'
    ];
}
