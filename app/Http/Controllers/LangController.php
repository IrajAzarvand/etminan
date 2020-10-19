<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function en()
    {
        app::setlocale('en');
        return back();
    }


    public function fa()
    {
        app::setLocale('fa');
        return back();
    }
}
