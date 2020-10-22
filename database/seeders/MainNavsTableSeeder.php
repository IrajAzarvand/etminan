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
                'parent' => true,
                'child' => false,
                'parent_content' => '',
                'content' => 'صفحه اصلی',
                'url' => 'Homepage',
            ],
            [
                'parent' => true,
                'child' => false,
                'parent_content' => '',
                'content' => 'درباره ما',
                'url' => '',
            ],
            [
                'parent' => false,
                'child' => true,
                'parent_content' => 'درباره ما',
                'content' => 'تاریخچه',
                'url' => '',
            ],
            [
                'parent' => false,
                'child' => true,
                'parent_content' => 'درباره ما',
                'content' => 'پیام مدیر عامل',
                'url' => '',
            ],
            [
                'parent' => true,
                'child' => false,
                'parent_content' => '',
                'content' => 'استخدام',
                'url' => 'Homepage',
            ],
        ];

        foreach ($MainNav as $nav)
//            foreach ($nav as $item) {
                DB::table('main_navs')->insert([
                    'parent' => $nav['parent'],
                    'child' => $nav['child'],
                    'parent_content' => $nav['parent_content'],
                    'content' => $nav['content'],
                    'url' => $nav['url'],
                ]);
//            }
        {

        }

    }
}
