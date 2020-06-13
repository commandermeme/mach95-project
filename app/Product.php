<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model', 'brand_name', 'description', 'stock', 'type', 'prod_image', 'price'
    ];
}
