<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNav extends Model
{
    protected $fillable=[
        'parent',
        'child',
        'parent_content',
        'content',
        'url',
    ];

}
