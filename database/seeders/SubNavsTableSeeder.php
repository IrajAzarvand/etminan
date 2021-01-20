<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubNavsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SubNavs = [
            6 => [
                [
                    'content_fa' => 'تاریخچه',
                    'content_en' => 'History',
                    'content_ar' => 'التاريخ',
                    'content_ru' => 'История',
                    'route_name' => 'HomePage',
                    'url' => null,
                ],
                [
                    'content_fa' => 'معرفی شرکت',
                    'content_en' => 'Company Introduction',
                    'content_ar' => 'مقدمة عن شركة',
                    'content_ru' => 'представление компании',
                    'route_name' => 'HomePage',
                    'url' => null,
                ],
                [
                    'content_fa' => 'پیام مدیر عامل',
                    'content_en' => 'CEO Message',
                    'content_ar' => 'رسالة من مدير الرأس',
                    'content_ru' => 'Письмо начальству',
                    'route_name' => 'HomePage',
                    'url' => null,
                ],
                [
                    'content_fa' => 'گواهینامه ها و افتخارات',
                    'content_en' => 'Certificates and Honors',
                    'content_ar' => 'الشهادات والأوسمة',
                    'content_ru' => 'Сертификаты и награды',
                    'route_name' => 'AllCH',
                    'url' => null,
                ],
                [
                    'content_fa' => 'چارت سازمانی',
                    'content_en' => 'Organizational Chart',
                    'content_ar' => 'مخطط',
                    'content_ru' => 'Организационная структура',
                    'route_name' => 'HomePage',
                    'url' => null,
                ],

            ],
            8 => [
                [
                    'content_fa' => 'فارسی',
                    'content_en' => 'فارسی',
                    'content_ru' => 'فارسی',
                    'content_ar' => 'فارسی',
                    'url' => '/locale/fa',
                    'route_name' => null,
                ],
                [
                    'content_fa' => 'English',
                    'content_en' => 'English',
                    'content_ru' => 'English',
                    'content_ar' => 'English',
                    'url' => '/locale/en',
                    'route_name' => null,
                ],
                [
                    'content_fa' => 'русский',
                    'content_en' => 'русский',
                    'content_ru' => 'русский',
                    'content_ar' => 'русский',
                    'url' => '/locale/ru',
                    'route_name' => null,
                ],
                [
                    'content_fa' => 'العربية',
                    'content_en' => 'العربية',
                    'content_ar' => 'العربية',
                    'content_ru' => 'العربية',
                    'url' => '/locale/ar',
                    'route_name' => null,
                ],
            ],
        ];

        foreach ($SubNavs as $Main => $SubNav) {
            foreach ($SubNav as $item) {
                DB::table('sub_navs')->insert([
                    'main_nav_id' => $Main,
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
}
