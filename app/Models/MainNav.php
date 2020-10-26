<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MainNav extends Model
{
    protected $fillable = [
        'url',
        'description',
    ];


    public function sub_navs()
    {
        return $this->hasMany(SubNav::class);
    }

    public function content()
    {
       return $this->hasOne(LocaleContent::class,'element_id')
           ->where('section','menu')
           ->where('locale',App::getLocale())
           ->where('element_title','');
    }
}
