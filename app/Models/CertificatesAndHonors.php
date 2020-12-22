<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificatesAndHonors extends Model
{
    protected $fillable=[
        'Ch_Image',
    ];

    public function contents()
    {
        return $this->hasMany(LocaleContent::class, 'element_id')->where('page', 'CH')->where('section', 'CH');

    }
}
