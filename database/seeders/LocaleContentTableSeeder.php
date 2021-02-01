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
            //BUTTON TITLE => MORE
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'بیشتر',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'More',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'Больше',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_more',
                'element_content' => 'أكثر',
            ],
            //!--BUTTON TITLE => MORE

            //BUTTON TITLE => BACK
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_back',
                'element_content' => 'بازگشت',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_back',
                'element_content' => 'Back',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_back',
                'element_content' => 'возвращается',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_back',
                'element_content' => 'العودة',
            ],
            //!--BUTTON TITLE => BACK

            //BUTTON TITLE => VIEW PRODUCT CATALOG
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'btn_view_catalog',
                'element_content' => 'مشاهده کاتالوگ محصول',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'btn_view_catalog',
                'element_content' => 'View product catalog',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'btn_view_catalog',
                'element_content' => 'Посмотреть каталог продукции',
            ],
            [
                'page' => '',
                'section' => 'PageElements',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'btn_view_catalog',
                'element_content' => 'عرض كتالوج المنتج',
            ],
            //!--BUTTON TITLE => VIEW PRODUCT CATALOG

            //SECTION TITLE => PRODUCTS
            [
                'page' => 'welcome',
                'section' => 'NewProducts',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'جدیدترین محصولات',
            ],
            [
                'page' => 'welcome',
                'section' => 'NewProducts',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'New Products',
            ],
            [
                'page' => 'welcome',
                'section' => 'NewProducts',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'новые продукты',
            ],
            [
                'page' => 'welcome',
                'section' => 'NewProducts',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'منتجات جديدة',
            ],


            [
                'page' => 'Products',
                'section' => '',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'محصولات',
            ],

            [
                'page' => 'Products',
                'section' => '',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Products',
            ],

            [
                'page' => 'Products',
                'section' => '',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Товары',
            ],

            [
                'page' => 'Products',
                'section' => '',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'منتجات',
            ],
            [
                'page' => 'Products',
                'section' => 'ProductIntroduction',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'معرفی محصول',
            ],
            [
                'page' => 'Products',
                'section' => 'ProductIntroduction',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Product Introduction',
            ],
            [
                'page' => 'Products',
                'section' => 'ProductIntroduction',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Внедрение продукции',
            ],
            [
                'page' => 'Products',
                'section' => 'ProductIntroduction',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'مقدمة المنتج',
            ],
            [
                'page' => 'Products',
                'section' => 'NutritionalValue',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'ارزش غذایی',
            ],
            [
                'page' => 'Products',
                'section' => 'NutritionalValue',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Nutritional Value',
            ],
            [
                'page' => 'Products',
                'section' => 'NutritionalValue',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Пищевая ценность',
            ],
            [
                'page' => 'Products',
                'section' => 'NutritionalValue',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'القيمة الغذائية',
            ],
            [
                'page' => 'Products',
                'section' => 'RelatedProducts',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'محصولات مرتبط',
            ],
            [
                'page' => 'Products',
                'section' => 'RelatedProducts',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Related Products',
            ],
            [
                'page' => 'Products',
                'section' => 'RelatedProducts',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Сопутствующие товары',
            ],
            [
                'page' => 'Products',
                'section' => 'RelatedProducts',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'منتجات ذات صله',
            ],
            //!--SECTION TITLE => PRODUCTS


            //--SECTION TITLE => CATALOGS
            [
                'page' => '',
                'section' => 'Catalogs',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'کاتالوگ محصولات',
            ],
            [
                'page' => '',
                'section' => 'Catalogs',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Product Catalogs',
            ],
            [
                'page' => '',
                'section' => 'Catalogs',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'каталог товаров',
            ],
            [
                'page' => '',
                'section' => 'Catalogs',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'كتالوج المنتجات',
            ],
            //!--SECTION TITLE => CATALOGS

            //--SECTION TITLE => GALLERY
            [
                'page' => '',
                'section' => 'Gallery',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'گالری تصاویر',
            ],
            [
                'page' => '',
                'section' => 'Gallery',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Photo Gallery',
            ],

            [
                'page' => '',
                'section' => 'Gallery',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Фотогалерея',
            ],

            [
                'page' => '',
                'section' => 'Gallery',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'معرض الصور',
            ],
            //!--SECTION TITLE => GALLERY

            //--SECTION FOOTER

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
            //!--!SECTION TITLE => FOOTER








            //--SECTION TITLE => CH (Certificate and honors)

            [
                'page' => 'CH',
                'section' => '',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'گواهینامه و افتخارات',
            ],
            [
                'page' => 'CH',
                'section' => '',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Certificates and honors',
            ],
            [
                'page' => 'CH',
                'section' => '',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Сертификаты и награды',
            ],
            [
                'page' => 'CH',
                'section' => '',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'الشهادات والأوسمة',
            ],
            //--!SECTION TITLE => CH (Certificate and honors)

            //--SECTION TITLE => GALLERY
            [
                'page' => 'Gallery',
                'section' => '',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'گالری تصاویر',
            ],
            [
                'page' => 'Gallery',
                'section' => '',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Photo Gallery',
            ],
            [
                'page' => 'Gallery',
                'section' => '',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Фотогалерея',
            ],
            [
                'page' => 'Gallery',
                'section' => '',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'معرض الصور',
            ],
            //--!SECTION TITLE => GALLERY


            //--SECTION TITLE => SALES OFFICES
            [
                'page' => 'SalesOffices',
                'section' => '',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'دفاتر فروش',
            ],
            [
                'page' => 'SalesOffices',
                'section' => '',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Sales Offices',
            ],
            [
                'page' => 'SalesOffices',
                'section' => '',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Офисы продаж',
            ],
            [
                'page' => 'SalesOffices',
                'section' => '',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'مكاتب المبيعات',
            ],
            //--!SECTION TITLE => SALES OFFICES


            //--SECTION TITLE => Company Introduction
            [
                'page' => 'CI',
                'section' => '',
                'locale' => 'fa',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'معرفی شرکت',
            ],
            [
                'page' => 'CI',
                'section' => '',
                'locale' => 'en',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Company Introduction',
            ],
            [
                'page' => 'CI',
                'section' => '',
                'locale' => 'ru',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'Компания Введение',
            ],
            [
                'page' => 'CI',
                'section' => '',
                'locale' => 'ar',
                'element_id' => '0',
                'element_title' => 'section_title',
                'element_content' => 'تعريف عن الشركة',
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
