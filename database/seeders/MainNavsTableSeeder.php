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
                'url' => 'HomePage',
            ],
            [
                'content_fa'=>'محصولات',
                'content_en'=>'Products',
                'url' => '',
            ],
            [
                'content_fa' => 'گالری تصاویر',
                'content_en' => 'Gallery',
                'url' => '',
            ],
            [
                'content_fa' => 'دفاتر فروش',
                'content_en' => 'Sales Offices',
                'url' => '',
            ],
            [
                'content_fa' => 'همکاری با ما',
                'content_en' => 'Employment',
                'url' => '',
            ],
            [
                'content_fa' => 'درباره ما',
                'content_en' => 'About Us',
                'url' => '',
            ],
            [
                'content_fa' => 'تماس با ما',
                'content_en' => 'Contact Us',
                'url' => '',
            ],
            [
                'content_fa' => 'زبان ها',
                'content_en' => 'Languages',
                'url' => '',
            ],
        ];

        foreach ($MainNav as $url => $item) {
            DB::table('main_navs')->insert([
                'content_fa' => $item['content_fa'],
                'content_en' => $item['content_en'],
                'url' => $item['url'],
            ]);
        }
    }

}
