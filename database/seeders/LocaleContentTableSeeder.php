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
                'section' => 'feature',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'عنوان فیچر اول',
                'element_content' => 'توضیحات فیچر اول',
            ],
            [
                'page' => 'welcome',
                'section' => 'feature',
                'locale' => 'fa',
                'element_id' => '2',
                'element_title' => 'عنوان فیچر دوم',
                'element_content' => 'توضیحات فیچر دوم',
            ],
            [
                'page' => 'welcome',
                'section' => 'feature',
                'locale' => 'fa',
                'element_id' => '3',
                'element_title' => 'عنوان فیچر سوم',
                'element_content' => 'توضیحات فیچر سوم',
            ],

            [
                'page' => 'welcome',
                'section' => 'feature',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'first feature title',
                'element_content' => 'first feature content',
            ],
            [
                'page' => 'welcome',
                'section' => 'feature',
                'locale' => 'en',
                'element_id' => '2',
                'element_title' => 'second feature title',
                'element_content' => 'second feature content',
            ],
            [
                'page' => 'welcome',
                'section' => 'feature',
                'locale' => 'en',
                'element_id' => '3',
                'element_title' => 'third feature title',
                'element_content' => 'third feature content',
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