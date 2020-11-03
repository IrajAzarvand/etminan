<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag_name',
        'product_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'tag_id');
    }
}