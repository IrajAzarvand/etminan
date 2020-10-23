<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubNav extends Model
{
    protected $fillable=[
        'main_nav',
        'SubNav',
        'url',

        ];

    public function main_nav()
    {
        return $this->belongsTo(MainNav::class);
    }
}