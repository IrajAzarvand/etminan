<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Facades\App;

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
            ->whereIn('page', array('', 'welcome')) //''=>contents for all pages(menus, footer, ...) and 'welcome'=>contents for home page only
            ->all();
        $SliderItems = collect($IndexContents)
            ->whereIn('section', array('slider'))
            ->all();

        $Slider = [];
        foreach ($SliderItems as $item) {

            $item['image'] = Slider::where('id', $item['element_id'])->value('image');
            $Slider[] = $item;
        }

        return view('welcome', compact('IndexContents', 'Slider'));
    }
}