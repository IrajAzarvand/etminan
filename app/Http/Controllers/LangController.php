<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function locale(string $lang)
    {
        Session::put('locale', $lang);
        AllContentOfLocale();
        return back();
    }
}