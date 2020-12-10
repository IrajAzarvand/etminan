<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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


        //get last 3 item from db to show in index page
        $NewPr = Product::orderBy('id', 'desc')->take(3)->get();

        //get category related to selected new products
        $NewPrCategory = [];
        foreach ($NewPr as $product) {
            $NewPrCategory[] = Category::where('id', $product->cat_id)->with('contents', function ($query) {
                $query->pluck('element_content');
            })->get();
        }

        $NewProduct = [];
        $P_Images=[];
        foreach ($NewPr as $item) {
            $P_Images = unserialize($item->images);
            $NewProduct[]['image'] = asset('storage/Main/Products/' . $item->id . '/' . $P_Images[0]); //get first image of product and save it in array

        }


        dd($NewPr, $NewPrCategory,$NewProduct);
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
