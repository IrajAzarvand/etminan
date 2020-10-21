<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Locales=[
            'fa',
            'en',
            'ar',
            'ru',
        ];

        foreach ($Locales as $locale){
            DB::table('locales')->insert([
                'locale'=>$locale,
            ]);
        }
    }
}
