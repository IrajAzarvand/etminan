<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocaleContent extends Model
{
    protected $fillable = [
        'page',
        'section',
        'element_id',
        'locale',
        'element_title',
        'element_content',
    ];

    public function locale()
    {
        return $this->belongsTo(Locale::class);
    }

    public function slider()
    {
        return $this->belongsTo(Slider::class)->where('section', 'slider');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}