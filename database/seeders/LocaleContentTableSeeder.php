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
        $content=[
            [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'fa',
                'element_id' => '1',
                'content' => 'اولین اسلاید',
            ],
            [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'fa',
                'element_id' => '2',
                'content' => 'دومین اسلاید اسلاید',
            ],
            [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'fa',
                'element_id' => '3',
                'content' => 'سومین اسلاید اسلاید',
            ],
           [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'en',
                'element_id' => '1',
                'content' => 'first slide',
            ],
            [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'en',
                'element_id' => '2',
                'content' => 'second slide',
            ],
            [
                'page' => 'welcome',
                'section' => 'slider',
                'locale' => 'en',
                'element_id' => '3',
                'content' => 'third slide',
            ],

            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'fa',
                'element_id' => '1',
                'content' => 'فیچر اول',
            ],
            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'fa',
                'element_id' => '2',
                'content' => 'فیچر دوم',
            ],
            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'fa',
                'element_id' => '3',
                'content' => 'فیچر سوم',
            ],

            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'en',
                'element_id' => '1',
                'content' => 'first feature',
            ],
            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'en',
                'element_id' => '2',
                'content' => 'second feature',
            ],
            [
                'page' => 'welcome',
                'section' => 'features',
                'locale' => 'en',
                'element_id' => '3',
                'content' => 'third feature',
            ],
            [
                'page' => 'aboutus',
                'section' => 'features',
                'locale' => 'fa',
                'element_id' => '1',
                'content' => 'first feature',
            ],
            [
                'page' => 'aboutus',
                'section' => 'features',
                'locale' => 'fa',
                'element_id' => '2',
                'content' => 'second feature',
            ],
            [
                'page' => 'aboutus',
                'section' => 'features',
                'locale' => 'en',
                'element_id' => '3',
                'content' => 'third feature',
            ],

        ];

        foreach ($content as $item) {
            DB::table('locale_contents')->insert([
                'page' => $item['page'],
                'section' => $item['section'],
                'element_id' => $item['element_id'],
                'locale' => $item['locale'],
                'content' =>$item['content'],
            ]);
        }
    }
}
