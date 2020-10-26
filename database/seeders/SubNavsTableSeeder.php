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
        $SubNavs=[
          6=>[
              [
                  'content_fa'=>'تاریخچه',
                  'content_en'=>'History',
                  'route_name'=>'HomePage',
                  'url'=>null,
              ],
              [
                  'content_fa'=>'پیام مدیر عامل',
                  'content_en'=>'CEO Message',
                  'route_name'=>'HomePage',
                  'url'=>null,
              ],
              [
                  'content_fa'=>'گواهینامه ها و افتخارات',
                  'content_en'=>'Certificates and Honors',
                  'route_name'=>'HomePage',
                  'url'=>null,
              ],
              [
                  'content_fa'=>'چارت سازمانی',
                  'content_en'=>'Organizational Chart',
                  'route_name'=>'HomePage',
                  'url'=>null,
              ],

          ],
            8=>[
                [
                    'content_fa'=>'فارسی Persian',
                    'content_en'=>'فارسی Persian',
                    'url'=>'/locale/fa',
                    'route_name'=>null,
                ],
                [
                    'content_fa'=>'انگلیسی English',
                    'content_en'=>'انگلیسی English',
                    'url'=>'/locale/en',
                    'route_name'=>null,
                ],
                [
                    'content_fa'=>'روسی Russian',
                    'content_en'=>'روسی Russian',
                    'url'=>'/locale/ru',
                    'route_name'=>null,
                ],
                [
                    'content_fa'=>'عربی Arabic',
                    'content_en'=>'عربی Arabic',
                    'url'=>'/locale/ar',
                    'route_name'=>null,
                ],
            ],
        ];

        foreach ($SubNavs as $Main=>$SubNav)
        {
            foreach ($SubNav as $item)
            {
                DB::table('sub_navs')->insert([
                    'main_nav_id'=>$Main,
                    'content_fa'=>$item['content_fa'],
                    'content_en'=>$item['content_en'],
                    'route_name'=>$item['route_name'],
                    'url'=>$item['url'],
                ]);
            }
        }
    }
}
