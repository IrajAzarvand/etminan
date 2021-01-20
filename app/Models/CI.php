<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CI extends Model
{
    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('page', 'CI')->where('section', 'CI');
    }
}
