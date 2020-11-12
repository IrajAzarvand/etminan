<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocaleContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Content = [
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'عنوان کاتالوگ اول',
                'element_content' => 'توضیحات کاتالوگ اول',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '2',
                'element_title' => 'عنوان کاتالوگ دوم',
                'element_content' => 'توضیحات کاتالوگ دوم',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '3',
                'element_title' => 'عنوان کاتالوگ سوم',
                'element_content' => 'توضیحات کاتالوگ سوم',
            ],

            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'first catalog title',
                'element_content' => 'first catalog content',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '2',
                'element_title' => 'second catalog title',
                'element_content' => 'second catalog content',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '3',
                'element_title' => 'third catalog title',
                'element_content' => 'third catalog content',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'جدیدترین محصولات',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'بیشتر',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'New Products',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'More',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'новые продукты',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'Больше',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'منتجات جديدة',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'أكثر',
            ],

        ];

        foreach ($Content as $item) {
            DB::table('locale_contents')->insert([
                'page' => $item['page'],
                'section' => $item['section'],
                'locale' => $item['locale'],
                'element_id' => $item['element_id'],
                'element_title' => $item['element_title'],
                'element_content' => $item['element_content'],
            ]);
        }
    }
}