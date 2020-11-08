<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'cat_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }

    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('section', 'products')->where('element_title', 'category');
    }
}