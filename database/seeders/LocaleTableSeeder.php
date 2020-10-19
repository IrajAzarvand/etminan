<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content=[
            [
                'page' => 'welcome',
                'section' => 'about-us',
                'locale' => 'fa',
                'content' => 'متن نمونه فارسی',
            ],
            [
                'page' => 'welcome',
                'section' => 'about-us',
                'locale' => 'en',
                'content' => 'english sample text',
            ],
        ];

        foreach ($content as $item) {
            DB::table('locales')->insert([
                'page' => $item['page'],
                'section' => $item['section'],
                'locale' => $item['locale'],
                'content' =>$item['content'],
            ]);
        }
    }
}
