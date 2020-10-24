<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainNavsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainNav = [
            [
                'url' => 'HomePage',
                'description' => 'صفحه اصلی'
            ],
            [
                'url' => '',
                'description' => 'محصولات'
            ],
            [
                'url' => '',
                'description' => 'گالری تصاویر'
            ],
            [
                'url' => '',
                'description' => 'دفاتر فروش'
            ],
            [
                'url' => '',
                'description' => 'همکاری با ما'
            ],
            [
                'url' => '',
                'description' => 'درباره ما'
            ],
            [
                'url' => '',
                'description' => 'تماس با ما'
            ],
            [
                'url' => '',
                'description' => 'زبان ها'
            ],
        ];

        foreach ($MainNav as $url => $item) {
            DB::table('main_navs')->insert([
                'url' => $item['url'],
                'description' => $item['description'],
            ]);
        }
    }

}
