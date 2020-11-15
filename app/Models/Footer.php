<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{

    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('section', 'footer');
    }
}