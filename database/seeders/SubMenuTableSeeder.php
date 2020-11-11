<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SubMenus = [
            'صفحه اصلی' => [
                [
                    'SubMenu' => 'اسلایدر',
                    'Url' => 'Slider.index',
                    'Icon' => 'fa fa-columns',
                ],
            ],
            'محصولات' => [
                [
                    'SubMenu' => 'مدیریت محصولات',
                    'Url' => 'Product.index',
                    'Icon' => 'fa fa-shopping-bag',
                ],
                [
                    'SubMenu' => 'دسته بندی محصولات',
                    'Url' => 'Category.index',
                    'Icon' => 'fa fa-list-ul',
                ],
                [
                    'SubMenu' => 'مدیریت برچسب ها',
                    'Url' => 'Tags.index',
                    'Icon' => 'fa fa-tags',
                ],
            ],
            'درباره ما' => [
                [
                    'SubMenu' => 'تاریخچه',
                    'Url' => 'History.index',
                    'Icon' => 'fa fa-clock-o',
                ],
                [
                    'SubMenu' => 'پیام مدیر عامل',
                    'Url' => 'CeoMessage.index',
                    'Icon' => 'fa fa-commenting-o',
                ],
                [
                    'SubMenu' => 'گواهینامه و افتخارات',
                    'Url' => 'CH.index',
                    'Icon' => 'fa fa-graduation-cap',
                ],
                [
                    'SubMenu' => 'چارت سازمانی',
                    'Url' => 'OC.index',
                    'Icon' => 'fa fa-street-view',
                ],
            ],
        ];

        foreach ($SubMenus as $MainMenu => $subMenu) {
            foreach ($subMenu as $item) {
                DB::table('sub_menus')->insert([
                    'main_menu' => $MainMenu,
                    'SubMenu' => $item['SubMenu'],
                    'Url' => $item['Url'],
                    'Icon' => $item['Icon'],
                ]);
            }
        }
    }
}