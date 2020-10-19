<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $locale = app::getLocale();
        $section = 'about-us';
        $page = 'welcome';
        $content= Locale::
        where('page', $page)
            ->where('locale', $locale)
            ->where('section', $section)
            ->value('content');
return view('welcome', compact('locale', 'content'));
    }
}
