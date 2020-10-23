<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNav extends Model
{
    protected $fillable = [
        'MainNav',
    ];

    public function sub_navs()
    {
        return $this->hasMany(SubNav::class,'main_nav','MainNav');
    }

}
