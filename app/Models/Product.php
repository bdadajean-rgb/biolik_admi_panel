<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'sku', 'description', 'price', 'quantity'])]
class Product extends Model
{
    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'integer',
    ];
}
