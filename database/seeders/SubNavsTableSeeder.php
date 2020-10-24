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
                  'url'=>'',
                  'description'=>'تاریخچه'
              ],
              [
                  'url'=>'',
                  'description'=>'پیام مدیر عامل'
              ],
              [
                  'url'=>'',
                  'description'=>'گواهینامه ها و افتخارات'
              ],
              [
                  'url'=>'',
                  'description'=>'چارت سازمانی'
              ],

          ],
            8=>[
                [
                    'url'=>'locale',
                    'description'=>'فارسی / Persian'
                ],
                [
                    'url'=>'locale',
                    'description'=>'انگلیسی / English'
                ],
                [
                    'url'=>'locale',
                    'description'=>'روسی / Russian'
                ],
                [
                    'url'=>'locale',
                    'description'=>'عربی / Arabic'
                ],
            ],
        ];

        foreach ($SubNavs as $Main=>$SubNav)
        {
            foreach ($SubNav as $item)
            {
                DB::table('sub_navs')->insert([
                    'main_nav_id'=>$Main,
                    'url'=>$item['url'],
                    'description'=>$item['description'],
                ]);
            }
        }
    }
}
