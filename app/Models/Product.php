<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cat_id',


    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function catalogues()
    {
        return $this->hasMany(ProductCatalog::class, 'product_id');
    }

    public function tags()
    {
        return $this->belongsTo(ProductTag::class, 'product_id');
    }
}