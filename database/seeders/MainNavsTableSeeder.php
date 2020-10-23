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
            'صفحه اصلی',
            'محصولات',
            'گالری تصاویر',
            'دفاتر فروش',
            'همکاری با ما',
            'درباره ما',
            'تماس با ما',
        ];

        foreach ($MainNav as $item) {
            DB::table('main_navs')->insert([
                'main_navs' => $item,
            ]);
        }
    }

}
