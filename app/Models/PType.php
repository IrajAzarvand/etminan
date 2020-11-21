<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PType extends Model
{
    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('section', 'products')->where('element_title', 'ptype');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'ptype_id');
    }
}