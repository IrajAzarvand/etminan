<?php

namespace App\Http\Controllers;

use App\Models\Locale;
use App\Models\LocaleContent;
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
    public function index()
    {
        $indexContents = collect(AllContentOfLocale())->where('page', 'welcome')->all();
        dd(App::getLocale(), $indexContents);
        return view('welcome', compact('indexContents'));
    }
}
