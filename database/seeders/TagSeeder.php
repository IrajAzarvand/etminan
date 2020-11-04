<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tags = [
            'باقلوا',
            'حصیری',
            'لیوانی',
            'لیتری',
            'قیفی',
            'چوبی',
            'یخی',
            'مغزدار',
            'لقمه ای',
            'توت فرنگی',
            'وانیلی',
            'طالبی',
            'ویفری',
            'پذیرایی',
            'زعفرانی',
            'پرتقالی',
            'موزی',
            'رومیکا',
            'بادامی',
            'میوه ای',
            'قاش قاش',
            'دوقلو',
            'مرد عنکبوتی',
            'اسپیرال',
            'هندوانه',
            'عروسکی',
            'آناناس',
            'تیوستر',
            'انبه',
            'آلبالویی',
        ];

        foreach ($Tags as $item) {
            DB::table('tags')->insert([
                'tag_name' => $item,
            ]);
        }
    }
}