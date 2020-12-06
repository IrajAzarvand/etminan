<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Facades\App;

class MainNavController extends Controller
{

    public function SharedContents()
    {
        $SharedContents = collect(AllContentOfLocale())
            ->whereIn('page', array('')) //''=>contents for all pages(menus, footer, ...)
            ->all();
        return $SharedContents;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function HomePage()
    {
        $SharedContents = $this->SharedContents();
        $IndexContents = collect(AllContentOfLocale())
            ->whereIn('page', array('welcome')) // 'welcome'=>contents for home page only
            ->all();
        $SliderItems = collect($IndexContents)
            ->whereIn('section', array('slider'))
            ->all();

        $Slider = [];
        foreach ($SliderItems as $item) {

            $item['image'] = Slider::where('id', $item['element_id'])->value('image');
            $Slider[] = $item;
        }

        return view('welcome', compact('SharedContents', 'IndexContents', 'Slider'));
    }


    /**
     * Display all ptypes and categories including products .
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function AllProducts()
    {
        $SharedContents = $this->SharedContents();
        $ProductsContents = collect(AllContentOfLocale())
            ->whereIn('page', array('products')) // 'welcome'=>contents for home page only
            ->all();

        return view('PageElements.Main.Product.AllProducts', compact('SharedContents', 'ProductsContents'));
    }
}