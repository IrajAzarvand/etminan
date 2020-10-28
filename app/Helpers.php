<?php

use App\Models\LocaleContent;
use App\Models\MainMenu;
use App\Models\MainNav;
use Illuminate\Support\Facades\App;

function MenuPicker()
{
    //get menus for Dashboard Panel
    return MainMenu::with('sub_menus')->get();
}

function NavPicker()
{
    //get menus for Main Site
    if (App::getLocale() == 'fa' || App::getLocale() == 'ar')
        return MainNav::with('sub_navs')->get();
    else
        return MainNav::with('sub_navs')->orderBy('id', 'DESC')->get();
}

function AllContentOfLocale()
{
    //get content of page based on (page, section, element_id, and language that user selected)
    //if selected locale oes not have contents in db, contents related to 'fa' locale
    //will be selected and show to user
    if (!empty(LocaleContent::where('locale', App::getLocale())->get()->toArray())) {
        return LocaleContent::where('locale', App::getLocale())->get()->toArray();
    } else {
        return LocaleContent::where('locale', 'fa')->get()->toArray();
    }
}


/**
 * function for replace persian digits with english
 * because persian digits cannot validate in laravel
 */
function per_digit_conv(string $per_digits)
{
    $result = "";
    $rep = [
        '۰',
        '۱',
        '۲',
        '۳',
        '۴',
        '۵',
        '۶',
        '۷',
        '۸',
        '۹',
    ];
    $en_digits = \range(0, 9);
    $result = \str_replace($rep, $en_digits, $per_digits);
    return $result;
}