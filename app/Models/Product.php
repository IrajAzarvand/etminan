<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'cat_id',
        'images',


    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function catalogues()
    {
        return $this->hasMany(ProductCatalog::class, 'product_id');
    }

    public function tags()
    {
        return $this->hasMany(ProductTag::class, 'product_id');
    }

    public function ptype()
    {
        return $this->belongsTo(PType::class);
    }
}