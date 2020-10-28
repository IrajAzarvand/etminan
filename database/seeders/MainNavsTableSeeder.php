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
                'content_fa'=>'صفحه اصلی',
                'content_en'=>'Home',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa'=>'محصولات',
                'content_en'=>'Products',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'گالری تصاویر',
                'content_en' => 'Gallery',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'دفاتر فروش',
                'content_en' => 'Sales Offices',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'همکاری با ما',
                'content_en' => 'Employment',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'درباره ما',
                'content_en' => 'About Us',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'تماس با ما',
                'content_en' => 'Contact Us',
                'route_name' => 'HomePage',
                'url'=>null,
            ],
            [
                'content_fa' => 'زبان ها',
                'content_en' => 'Languages',
                'route_name' => null,
                'url'=>null,
            ],
        ];

        foreach ($MainNav as $url => $item) {
            DB::table('main_navs')->insert([
                'content_fa' => $item['content_fa'],
                'content_en' => $item['content_en'],
                'route_name' => $item['route_name'],
                'url' => $item['url'],
            ]);
        }
    }

}