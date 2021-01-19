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
                'name' => 'Ardabil',
                'fa' => 'اردبيل',
                'en' => 'Ardabil',
                'ru' => 'Ардебиль',
                'ar' => 'أردبيل',

            ],
            [
                'id' => 2,
                'name' => 'Esfahan',
                'fa' => 'اصفهان',
                'en' => 'Esfahan',
                'ru' => 'Исфахан',
                'ar' => 'اصفهان',
            ],
            [
                'id' => 3,
                'name' => 'Alborz',
                'fa' => 'البرز',
                'en' => 'Alborz',
                'ru' => 'Альборз',
                'ar' => 'البرز',
            ],
            [
                'id' => 4,
                'name' => 'Ilam',
                'fa' => 'ايلام',
                'en' => 'Ilam',
                'ru' => 'ايلام',
                'ar' => 'ايلام',
            ],
            [
                'id' => 5,
                'name' => 'East Azarbaijan',
                'fa' => 'آذربايجان شرقي',
                'en' => 'East Azarbaijan',
                'ru' => 'Восточный Азербайджан',
                'ar' => 'شرق أذربيجان',
            ],
            [
                'id' => 6,
                'name' => 'Western Azerbaijan',
                'fa' => 'آذربايجان غربي',
                'en' => 'Western Azerbaijan',
                'ru' => 'Западный Азербайджан',
                'ar' => 'أذربيجان الغربية',
            ],
            [
                'id' => 7,
                'name' => 'Bushehr',
                'fa' => 'بوشهر',
                'en' => 'Bushehr',
                'ru' => 'Бушер',
                'ar' => 'بوشهر',
            ],
            [
                'id' => 8,
                'name' => 'Tehran',
                'fa' => 'تهران',
                'en' => 'Tehran',
                'ru' => 'Тегеран',
                'ar' => 'طهران',

            ],
            [
                'id' => 9,
                'name' => 'Chaharmahal O Bakhtiari',
                'fa' => 'چهار محال و بختیاری',
                'en' => 'Chaharmahal O Bakhtiari',
                'ru' => 'Чахармахал и Бахтиари',
                'ar' => 'شارمحال وبختياري',

            ],
            [
                'id' => 10,
                'name' => 'South Khorasan',
                'fa' => 'خراسان جنوبي',
                'en' => 'South Khorasan',
                'ru' => 'خراسان جنوبي',
                'ar' => 'خراسان جنوبي',
            ],
            [
                'id' => 11,
                'name' => 'Khorasan Razavi',
                'fa' => 'خراسان رضوي',
                'en' => 'Khorasan Razavi',
                'ru' => 'Хорасан Разави',
                'ar' => 'خراسان رضوي',

            ],
            [
                'id' => 12,
                'name' => 'North Khorasan',
                'fa' => 'خراسان شمالي',
                'en' => 'North Khorasan',
                'ru' => 'Северный Хорасан',
                'ar' => 'شمال خراسان',

            ],
            [
                'id' => 13,
                'name' => 'Khuzestan',
                'fa' => 'خوزستان',
                'en' => 'Khuzestan',
                'ru' => 'Хузестан',
                'ar' => 'خوزستان',
            ],
            [
                'id' => 14,
                'name' => 'Zanjan',
                'fa' => 'زنجان',
                'en' => 'Zanjan',
                'ru' => 'Зенджан',
                'ar' => 'زنجان',

            ],
            [
                'id' => 15,
                'name' => 'Semnan',
                'fa' => 'سمنان',
                'en' => 'Semnan',
                'ru' => 'سمنان',
                'ar' => 'سمنان',
            ],
            [
                'id' => 16,
                'name' => 'Sistan O Baluchestan',
                'fa' => 'دفتر فروش سیستان و بلوچستان
شهرک صنعتی - جاده میرجاوه - بلوار کارگر - نبش کارگر 5 - اولین درب سمت چپ
تلفن: 33592447 - 054',
                'en' => 'Sistan-o-Baluchestan sales office
Industrial Town - Mirjaveh Road - Kargar Boulevard - Corner of Kargar 5 - The first door on the left
Phone: 33592447 - 054',
                'ru' => 'Офис продаж в Систане и Белуджистане
Промышленный город - улица Мирджаве - бульвар Каргар - угол Каргара 5 - первая дверь слева
Телефон: 33592447 - 054',
                'ar' => 'مكتب مبيعات سيستان وبلوشستان
المدينة الصناعية - طريق الميرجفة - بوليفارد كركر - ناصية كركر 5 - الباب الأول على اليسار
هاتف: 33592447-054',

            ],
            [
                'id' => 17,
                'name' => 'Fars',
                'fa' => 'فارس',
                'en' => 'Fars',
                'ru' => 'فارس',
                'ar' => 'فارس',

            ],
            [
                'id' => 18,
                'name' => 'Qazvin',
                'fa' => 'قزوين',
                'en' => 'Qazvin',
                'ru' => 'قزوين',
                'ar' => 'قزوين',


            ],
            [
                'id' => 19,
                'name' => 'Qom',
                'fa' => 'قم',
                'en' => 'Qom',
                'ru' => 'Кум',
                'ar' => 'قم',
            ],
            [
                'id' => 20,
                'name' => 'Kordestan',
                'fa' => 'كردستان',
                'en' => 'Kordestan',
                'ru' => 'كردستان',
                'ar' => 'كردستان',

            ],
            [
                'id' => 21,
                'name' => 'Kerman',
                'fa' => 'كرمان',
                'en' => 'Kerman',
                'ru' => 'كرمان',
                'ar' => 'كرمان',

            ],
            [
                'id' => 22,
                'name' => 'Kermanshah',
                'fa' => 'كرمانشاه',
                'en' => 'Kermanshah',
                'ru' => 'Керманшах',
                'ar' => 'كرمانشاه',

            ],
            [
                'id' => 23,
                'name' => 'Kohgiluyeh and Boyer-Ahmad',
                'fa' => 'کهگیلویه و بویر احمد',
                'en' => 'Kohgiluyeh and Boyer-Ahmad',
                'ru' => 'Кохгилуе и Бойер-Ахмад',
                'ar' => 'كوهجيلويه و بوير أحمد',

            ],
            [
                'id' => 24,
                'name' => 'Golestan',
                'fa' => 'گلستان',
                'en' => 'Golestan',
                'ru' => 'Голестан',
                'ar' => 'جولستان',

            ],
            [
                'id' => 25,
                'name' => 'Gilan',
                'fa' => 'گيلان',
                'en' => 'Gilan',
                'ru' => 'گيلان',
                'ar' => 'گيلان',

            ],
            [
                'id' => 26,
                'name' => 'Lorestan',
                'fa' => 'لرستان',
                'en' => 'Lorestan',
                'ru' => 'لرستان',
                'ar' => 'لرستان',
            ],
            [
                'id' => 27,
                'name' => 'Mazandaran',
                'fa' => 'مازندران',
                'en' => 'Mazandaran',
                'ru' => 'Мазандаран',
                'ar' => 'مازندران',
            ],
            [
                'id' => 28,
                'name' => 'Markazi',
                'fa' => 'مركزي',
                'en' => 'Markazi',
                'ru' => 'مركزي',
                'ar' => 'مركزي',
            ],
            [
                'id' => 29,
                'name' => 'Hormozgan',
                'fa' => 'هرمزگان',
                'en' => 'Hormozgan',
                'ru' => 'Хормозган',
                'ar' => 'هرمزجان',
            ],
            [
                'id' => 30,
                'name' => 'Hamedan',
                'fa' => 'همدان',
                'en' => 'Hamedan',
                'ru' => 'Хамедан',
                'ar' => 'همدان',
            ],
            [
                'id' => 31,
                'name' => 'Yazd',
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
                    'element_title' => $State['name'],
                    'element_content' => $State[$l['locale']],

                ]);
            }

        }
    }
}
