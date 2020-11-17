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
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'عنوان کاتالوگ اول',
                'element_content' => 'توضیحات کاتالوگ اول',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '2',
                'element_title' => 'عنوان کاتالوگ دوم',
                'element_content' => 'توضیحات کاتالوگ دوم',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'fa',
                'element_id' => '3',
                'element_title' => 'عنوان کاتالوگ سوم',
                'element_content' => 'توضیحات کاتالوگ سوم',
            ],

            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'first catalog title',
                'element_content' => 'first catalog content',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '2',
                'element_title' => 'second catalog title',
                'element_content' => 'second catalog content',
            ],
            [
                'page' => 'welcome',
                'section' => 'catalog',
                'locale' => 'en',
                'element_id' => '3',
                'element_title' => 'third catalog title',
                'element_content' => 'third catalog content',
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
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'новые продукты',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'Больше',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'منتجات جديدة',
            ],
            [
                'page' => '',
                'section' => 'new_products',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_title',
                'element_content' => 'أكثر',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'آدرس',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Address',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Адрес',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'نشانی',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'address',
                'element_content' => 'کیلومتر ۳۵ جاده تبریز-آذرشهر، شهرک صنعتی شهید سلیمی، خیابان ۲۰متری دهم، شرکت بستنی اطمینان',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ar',
                'element_id' => '1',
                'element_title' => 'address',
                'element_content' => '35 كم من طريق تبريز-ازارشهر ، مدينة الشهيد سليمي الصناعية ، 20 متر من شارع 10 ، شركة أتمينان للمثلجات',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'address',
                'element_content' => '35 km of Tabriz-Azarshahr road, Shahid Salimi industrial town, 20th meter 10th street, Etminan ice cream company',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ru',
                'element_id' => '1',
                'element_title' => 'address',
                'element_content' => '35 км дороги Тебриз-Азаршахр, промышленный город Шахид Салими, 20-й метр 10-й улицы, компания по производству мороженого Атминан',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'fa',
                'element_id' => '1',
                'element_title' => 'copyright',
                'element_content' => 'تمام حقوق برای شرکت اطمینان محفوظ است',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'en',
                'element_id' => '1',
                'element_title' => 'copyright',
                'element_content' => 'All Rights Reserved For Etminan Company',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ru',
                'element_id' => '1',
                'element_title' => 'copyright',
                'element_content' => 'Все права защищены за страховой компанией',
            ],
            [
                'page' => '',
                'section' => 'footer',
                'locale' => 'ar',
                'element_id' => '1',
                'element_title' => 'copyright',
                'element_content' => 'جميع الحقوق محفوظة لشركة الاطمینان',
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