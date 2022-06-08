<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name', 'alias', 'description', 'price', 'availability', 'category', 'related_categories', 'image'
    ];

    protected $casts = [
        'related_categories' => 'array'
    ];

    protected $attributes = [
        'related_categories' => '{}'
    ];
}
