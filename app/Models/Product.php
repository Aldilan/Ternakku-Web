<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'product_img',
        'product_name',
        'description',
        'product_stock',
        'product_sold',
        'buying_price',
        'base_price',
        'final_price',
    ];
}
