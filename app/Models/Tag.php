<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function products()
    {
        return $this->hasMany(ProductTag::class, 'tag_id');
    }

    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('section', 'products')->where('element_title', 'tag');
    }
}