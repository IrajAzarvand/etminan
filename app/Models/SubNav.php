<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class SubNav extends Model
{
    protected $fillable=[
        'main_nav_id',
        'SubNav',
        'url',
        'description',

        ];

    public function main_nav()
    {
        return $this->belongsTo(MainNav::class)->with($this->content());
    }

    public function content()
    {
        return $this->hasOne(LocaleContent::class,'element_id')
            ->where('section','menu')
            ->where('locale',App::getLocale());
    }
}
