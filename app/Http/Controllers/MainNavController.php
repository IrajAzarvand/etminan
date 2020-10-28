<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\LocaleContent;
use Cassandra\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class MainNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function HomePage()
    {
        $IndexContents = collect(AllContentOfLocale())
            ->whereIn('page', array('','welcome'))//''=>contents for all pages(menus, footer, ...) and 'welcome'=>contents for home page only
            ->all();
            // dd(gettype($IndexContents));
        return view('welcome', compact('IndexContents'));
    }
}