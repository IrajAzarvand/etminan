<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function locale(string $language)
    {
        if (array_key_exists($language, config('locale.languages'))) {
            Session::put('locale', $language);
            App::setLocale($language);
            //when site locale changes, this helper will fetch all of contents from db related to that locale.
            AllContentOfLocale();
            return redirect()->back();
        }
        return redirect()->back();

    }
}
