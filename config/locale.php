<?php
return [
    /*
     * Show language selector
     *
     * @var bool
     */
    'status' => true,

    /*
     * Available languages
     *
     * Add the language code to the following array
     * The code must have the same name as in the languages folder
     * Make sure they're in alphabetical order.
     *
     * @var array
     */

    'languages' => [
        /*
         * Key is the Laravel locale code
         * Index 0 of sub-array is the Carbon locale code
         * Index 1 of sub-array is the PHP locale code for setlocale()
         * Index 2 of sub-array is true if the language uses RTL (right-to-left)
         * Index 3 of sub-array is the language name in the original language
         */
        [
            'locale' => 'fa',
            'rtl' => true,
            'name' => 'فارسی',
        ],
        [
            'locale' => 'en',
            'rtl' => false,
            'name' => 'انگلیسی',
        ],
        [
            'locale' => 'ru',
            'rtl' => false,
            'name' => 'روسی',
        ],
        [
            'locale' => 'ar',
            'rtl' => true,
            'name' => 'عربی',
        ],
    ],
];