<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class SubNav extends Model
{
    protected $fillable=[
        'main_nav_id',
        'content_fa',
        'content_en',
        'content_ru',
        'content_ar',
        'url',

        ];

    public function main_nav()
    {
        return $this->belongsTo(MainNav::class)->with($this->content());
    }
}
