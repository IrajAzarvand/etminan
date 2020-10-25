<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function main_nav()
    {
        return $this->hasOne(MainNav::class,'id','element_id')
            ->where('section','=','menu');
    }

}
