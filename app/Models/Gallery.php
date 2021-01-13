<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable=[
    'images',
    ];

    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('page', 'gallery')->where('section', 'gallery');
    }

}
