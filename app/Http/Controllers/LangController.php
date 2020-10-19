<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function locale(Request $request, string $language)
    {
        try {
            if (array_key_exists($language, config('locale.languages'))) {
                Session::put('locale', $language);
                App::setLocale($language);
                return redirect()->back();
            }
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
    }
}
