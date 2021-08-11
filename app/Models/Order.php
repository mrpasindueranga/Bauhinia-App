<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'quantity',
        'placedBy',
        'brand',
        'name',
        'email',
        'address',
        'contact_1',
        'contact_2',
        'date',
    ];
}
