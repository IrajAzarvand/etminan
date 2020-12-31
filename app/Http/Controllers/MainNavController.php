<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LocaleContent;
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


        $Footer = collect($SharedContents)->where('section', 'footer');
        foreach ($Footer as $key => $value) {
            if ($value['element_title'] == 'address') {
                $Address = $value['element_content'];
            } elseif ($value['element_title'] == 'copyright') {
                $CopyRight = $value['element_content'];
            } elseif ($value['element_title'] == 'section_title') {
                $SectionTitle = $value['element_content'];
            }
        }
        return [$SectionTitle, $Address, $CopyRight];

        // return $SharedContents;
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

        //*************************** SLIDER ********************************************************************* */
        $SliderItems = collect($IndexContents)
            ->whereIn('section', array('slider'))
            ->all();

        $Slider = [];
        foreach ($SliderItems as $item) {

            $item['image'] = asset('storage/Main/Sliders/' . Slider::where('id', $item['element_id'])->value('image'));
            $Slider[] = $item;
        }


        //************************** NEW PRODUCTS ***************************************************************** */

        $NewProductsSection = collect($IndexContents)->where('section', 'new_products');
        $SectionTitle = $NewProductsSection->where('element_title', 'section_title')->pluck('element_content')->first();
        $BtnNewProducts = $NewProductsSection->where('element_title', 'btn_title')->pluck('element_content')->first();


        //get last 3 item of products from db to show in index page
        $NewPr = Product::orderBy('id', 'desc')->take(3)->get();

        //get product name
        $NewPrName = [];
        foreach ($NewPr as $key => $pr) {
            foreach (Locales() as $item) {
                $NewPrName[$key][$item['locale']] = LocaleContent::where(['page' => 'products', 'section' => 'products', 'element_id' => $pr->id, 'locale' => $item['locale'], 'element_title' => 'p_name_' . $item['locale']])->pluck('element_content')[0];
            }
        }


        $NewProducts = [];
        $P_Images = [];
        //collect first image of each product and put it in array
        foreach ($NewPr as $key => $item) {
            $P_Images = unserialize($item->images);
            $NewProducts[$key]['image'] = asset('storage/Main/Products/' . $item->id . '/' . $P_Images[0]); //get first image of product and save it in array
            $NewProducts[$key]['title_fa'] =  $NewPrName[$key]['fa'];
            $NewProducts[$key]['title_en'] =  $NewPrName[$key]['en'];
            $NewProducts[$key]['title_ru'] =  $NewPrName[$key]['ru'];
            $NewProducts[$key]['title_ar'] =  $NewPrName[$key]['ar'];
        }

        //**************************  LATEST NEWS *********************************************************** */
        $LatestNews = collect($IndexContents)->where('section', 'latestnews');
        $LatestNewsTitle = $LatestNews->where('element_title', 'news_title')->pluck('element_content');


        //**************************       ***************************************************************** */


        return view('welcome', compact('SharedContents', 'IndexContents', 'Slider', 'NewProducts', 'SectionTitle', 'BtnNewProducts', 'LatestNewsTitle'));
    }


    /**
     * Display all ptypes and categories including products .
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function AllProducts()
    {
        $SharedContents = $this->SharedContents();
//        $ProductsContents = collect(AllContentOfLocale())
//            ->whereIn('page', array('products'))
//            ->all();
        $Products=Product::with('contents')->get();
        $AllCategories=Category::with('contents')->get();
        $CategoriesList=[];
        foreach ($AllCategories as $key=>$item)
        {
            foreach (Locales() as $lang)
            $CategoriesList[$key][$lang['locale']]=$item->contents()->where('locale',$lang['locale'])->pluck('element_content')[0];
        }
        dd($CategoriesList);


        return view('PageElements.Main.Product.AllProducts', compact('SharedContents', 'ProductsContents'));
    }
}
