<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    protected $fillable=[
        'locale'
    ];


    public function  locale_contents()
    {
        return $this->hasMany(LocaleContent::class,'locale','locale');
    }
}
