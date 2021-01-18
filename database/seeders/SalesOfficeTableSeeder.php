<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesOfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $States = [
            [
               'id' => 1,
               'fa' => 'اردبيل',
               'en' => 'Ardabil',
               'ru' => 'Ардебиль',
               'ar' => 'أردبيل',

            ],
            [
               'id' => 2,
               'fa' => 'اصفهان',
               'en' => 'Esfahan',
               'ru' => 'Исфахан',
               'ar' => 'اصفهان',
            ],
            [
               'id' => 3,
               'fa' => 'البرز',
               'en' => 'Alborz',
               'ru' => 'Альборз',
               'ar' => 'البرز',
            ],
            [
               'id' => 4,
               'fa' => 'ايلام',
               'en' => 'Ilam',
               'ru' => 'ايلام',
               'ar' => 'ايلام',
            ],
            [
               'id' => 5,
               'fa' => 'آذربايجان شرقي',
               'en' => 'East Azarbaijan',
               'ru' => 'Восточный Азербайджан',
               'ar' => 'شرق أذربيجان',
            ],
            [
              'id' => 6,
               'fa' => 'آذربايجان غربي',
               'en' => 'Western Azerbaijan',
               'ru' => 'Западный Азербайджан',
               'ar' => 'أذربيجان الغربية',
            ],
            [
               'id' => 7,
               'fa' => 'بوشهر',
               'en' => 'Bushehr',
               'ru' => 'Бушер',
               'ar' => 'بوشهر',
            ],
            [
              'id' =>  8,
               'fa' => 'تهران',
               'en' => 'Tehran',
               'ru' => 'Тегеран',
               'ar' => 'طهران',

            ],
            [
               'id' => 9,
               'fa' => 'چهار محال و بختیاری',
               'en' => 'Chaharmahal and Bakhtiari',
               'ru' => 'Чахармахал и Бахтиари',
               'ar' => 'شارمحال وبختياري',

            ],
            [
               'id' => 10,
               'fa' => 'خراسان جنوبي',
               'en' => 'خراسان جنوبي',
               'ru' => 'خراسان جنوبي',
               'ar' => 'خراسان جنوبي',
            ],
            [
               'id' => 11,
               'fa' => 'خراسان رضوي',
               'en' => 'Khorasan Razavi',
               'ru' => 'Хорасан Разави',
               'ar' => 'خراسان رضوي',

            ],
            [
               'id' => 12,
               'fa' => 'خراسان شمالي',
               'en' => 'North Khorasan',
               'ru' => 'Северный Хорасан',
               'ar' => 'شمال خراسان',

            ],
            [
               'id' => 13,
               'fa' => 'خوزستان',
               'en' => 'Khuzestan',
               'ru' => 'Хузестан',
               'ar' => 'خوزستان',
            ],
            [
               'id' => 14,
               'fa' => 'زنجان',
               'en' => 'Zanjan',
               'ru' => 'Зенджан',
               'ar' => 'زنجان',

            ],
            [
               'id' => 15,
               'fa' => 'سمنان',
               'en' => 'Semnan',
               'ru' => 'سمنان',
               'ar' => 'سمنان',
            ],
            [
               'id' => 16,
               'fa' => 'سیستان و بلوچستان',
               'en' => 'Sistan and Baluchestan',
              'ru' =>  'Систан и Белуджистан',
               'ar' => 'سيستان وبلوشستان',

            ],
            [
               'id' => 17,
               'fa' => 'فارس',
               'en' => 'Fars',
               'ru' => 'فارس',
               'ar' => 'فارس',

            ],
            [
              'id' =>  18,
             'fa' =>   'قزوين',
             'en' =>   'Qazvin',
             'ru' =>   'قزوين',
             'ar' =>   'قزوين',


            ],
            [
              'id' =>  19,
              'fa' =>  'قم',
              'en' =>  'Qom',
              'ru' =>  'Кум',
              'ar' =>  'قم',
            ],
            [
               'id' => 20,
               'fa' => 'كردستان',
               'en' => 'Kordestan',
               'ru' => 'كردستان',
               'ar' => 'كردستان',

            ],
            [
               'id' => 21,
               'fa' => 'كرمان',
               'en' => 'Kerman',
               'ru' => 'كرمان',
               'ar' => 'كرمان',

            ],
            [
               'id' => 22,
               'fa' => 'كرمانشاه',
               'en' => 'Kermanshah',
               'ru' => 'Керманшах',
               'ar' => 'كرمانشاه',

            ],
            [
               'id' => 23,
               'fa' => 'کهگیلویه و بویر احمد',
               'en' => 'Kohgiluyeh and Boyer-Ahmad',
               'ru' => 'Кохгилуе и Бойер-Ахмад',
               'ar' => 'كوهجيلويه و بوير أحمد',

            ],
            [
               'id' => 24,
               'fa' => 'گلستان',
               'en' => 'Golestan',
               'ru' => 'Голестан',
               'ar' => 'جولستان',

            ],
            [
               'id' => 25,
               'fa' => 'گيلان',
               'en' => 'Gilan',
               'ru' => 'گيلان',
               'ar' => 'گيلان',

            ],
            [
               'id' => 26,
               'fa' => 'لرستان',
               'en' => 'Lorestan',
               'ru' => 'لرستان',
               'ar' => 'لرستان',
            ],
            [
               'id' => 27,
               'fa' => 'مازندران',
               'en' => 'Mazandaran',
               'ru' => 'Мазандаран',
               'ar' => 'مازندران',
            ],
            [
               'id' => 28,
               'fa' => 'مركزي',
               'en' => 'Markazi',
               'ru' => 'مركزي',
               'ar' => 'مركزي',
            ],
            [
                'id' =>29,
               'fa' => 'هرمزگان',
                'en' =>'Hormozgan',
               'ru' => 'Хормозган',
               'ar' => 'هرمزجان',
            ],
            [
               'id' => 30,
               'fa' => 'همدان',
               'en' => 'Hamedan',
               'ru' => 'Хамедан',
               'ar' => 'همدان',
            ],
            [
                'id' => 31,
                'fa' => 'يزد',
                'en' => 'Yazd',
                'ru' => 'Йезд',
                'ar' => 'يزد',
            ],

        ];
        foreach ($States as $State) {

            DB::table('sales_offices')->insert([
                'id' => $State['id'],
            ]);
            foreach (Locales() as $l) {
                DB::table('locale_contents')->insert([
                    'page' => 'sales_office',
                    'section' => 'sales_office',
                    'element_id' => $State['id'],
                    'locale' => $l['locale'],
                    'element_title'=>$State['fa'],
                    'element_content'=>$State[$l['locale']],

                ]);
            }

        }
    }
}
