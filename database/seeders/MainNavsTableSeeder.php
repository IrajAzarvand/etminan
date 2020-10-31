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
                'content_fa' => 'صفحه اصلی',
                'content_en' => 'Home',
                'content_ar' => 'الصفحة الرئيسية',
                'content_ru' => 'Главная страница',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'محصولات',
                'content_en' => 'Products',
                'content_ru' => 'Продукты',
                'content_ar' => 'منتجات',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'گالری تصاویر',
                'content_en' => 'Gallery',
                'content_ar' => 'معرض الصور',
                'content_ru' => 'Фотогалерея',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'دفاتر فروش',
                'content_en' => 'Sales Offices',
                'content_ar' => 'مكتب المبيعات',
                'content_ru' => 'Офис продаж',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'همکاری با ما',
                'content_en' => 'Employment',
                'content_ru' => 'Работать с нами',
                'content_ar' => 'تجنيد',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'درباره ما',
                'content_en' => 'About Us',
                'content_ar' => 'معلومات عنا',
                'content_ru' => 'насчет нас',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'تماس با ما',
                'content_en' => 'Contact Us',
                'content_ru' => 'Связаться с нами',
                'content_ar' => 'اتصل بنا',
                'route_name' => 'HomePage',
                'url' => null,
            ],
            [
                'content_fa' => 'زبان ها',
                'content_en' => 'Languages',
                'content_ar' => 'اللغات',
                'content_ru' => 'языки',
                'route_name' => null,
                'url' => null,
            ],
        ];

        foreach ($MainNav as $url => $item) {
            DB::table('main_navs')->insert([
                'content_fa' => $item['content_fa'],
                'content_en' => $item['content_en'],
                'content_ru' => $item['content_ru'],
                'content_ar' => $item['content_ar'],
                'route_name' => $item['route_name'],
                'url' => $item['url'],
            ]);
        }
    }
}