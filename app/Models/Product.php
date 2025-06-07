<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'pictures',
        'price',
        'material',
    ];

    protected $casts = [
        'pictures' => 'array',
        'price' => 'decimal:2',
    ];

    public function getPriceAttribute($value)
    {
        return number_format($value, 2);
    }
}
