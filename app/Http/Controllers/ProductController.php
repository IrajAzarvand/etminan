<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LocaleContent;
use App\Models\Product;
use App\Models\PType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_ptypes = LocaleContent::where(['section' => 'ptype', 'locale' => 'fa', 'element_title' => 'ptype'])->pluck('element_content', 'element_id');
        $product_categories = LocaleContent::where(['section' => 'category', 'locale' => 'fa', 'element_title' => 'category'])->pluck('element_content', 'element_id');
        return view('PageElements.Dashboard.Setting.Products', compact('product_ptypes', 'product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Product = new Product;
        $Product->save();
        $element_id = $Product->id;
        $Contents = [];
        if ($request->p_introduction_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'products',
                    'section' => 'products',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'p_introduction_' . $item['locale'],
                    'element_content' => $request->input('p_introduction_' . $item['locale']),
                ]);
            }
        }

        if ($request->nutritionalValue_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'products',
                    'section' => 'products',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'nutritionalValue_' . $item['locale'],
                    'element_content' => $request->input('nutritionalValue_' . $item['locale']),
                ]);
            }
        }

        $NewProduct = Product::find($element_id);
        $NewProduct->contents()->saveMany($Contents);

        $NewProduct->cat_id = $request->input('category');
        $images = [];
        if ($request->hasFile('product_images')) {
            $count = 0;
            foreach ($request->file('product_images') as $image) {
                $uploaded = $image;
                $filename = $element_id . '_' . time() . $count++ . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                $uploaded->storeAs('public\Main\Products\\' . $element_id . '\\', $filename);
                $images[] = $filename;
            }
        }
        $NewProduct->images = serialize($images);
        $NewProduct->update();

        return redirect('/Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($CatID)
    {
        $result = Product::where('cat_id', $CatID)->with('contents')->get()->pluck('contents');
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $Selectedproduct = Product::where('id', $product)->with('contents')->first();
        $product_ptypes = LocaleContent::where(['section' => 'ptype', 'locale' => 'fa', 'element_title' => 'ptype'])->pluck('element_content', 'element_id');
        $Selectedptype = Category::where('id', $Selectedproduct->cat_id)->value('ptype_id');
        $ptype_categories = Category::where('ptype_id', $Selectedptype)->with('contents', function ($query) {
            $query->where('locale', '=', 'fa')
                ->pluck('element_content', 'element_id');
        })->get()->toArray();

        $ProductImages = unserialize($Selectedproduct->images);
        return view('PageElements.Dashboard.Setting.ProductsViewEdit', compact('Selectedproduct', 'product_ptypes', 'Selectedptype', 'ptype_categories', 'ProductImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $element_id = $request->input('ProductId');
        $SelectedProduct = Product::where('id', $element_id)->with('contents')->first();
        // dd($SelectedProduct);



        $ProductImages = unserialize($SelectedProduct->images);
        // $images = [];
        if ($request->hasFile('product_images')) {
            $count = 0;
            foreach ($request->file('product_images') as $image) {
                $uploaded = $image;
                $filename = $element_id . '_' . time() . $count++ . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                $uploaded->storeAs('public\Main\Products\\' . $element_id . '\\', $filename);
                $ProductImages[] = $filename;
            }
        }
        $SelectedProduct->images = serialize($ProductImages);

        $Contents = [];
        if ($request->p_introduction_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'products',
                    'section' => 'products',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'p_introduction_' . $item['locale'],
                    'element_content' => $request->input('p_introduction_' . $item['locale']),
                ]);
            }
        }

        if ($request->nutritionalValue_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'products',
                    'section' => 'products',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'nutritionalValue_' . $item['locale'],
                    'element_content' => $request->input('nutritionalValue_' . $item['locale']),
                ]);
            }
        }



        foreach (Locales() as $item) {
            $SelectedProduct->contents()->where('element_id', $element_id)
                ->update(
                    [
                        'page' => $Contents['page'],
                        'section' => $Contents['section'],
                        'element_id' => $Contents['element_id'],
                        'locale' => $Contents['locale'],
                        'element_title' => $Contents['element_title'],
                        'element_content' => $Contents['element_content'],
                    ],
                );
        }


        // $this->resources()->wherePivot('another_id', 1)
        //           ->updateExistingPivot($resource_id, array(
        //                 'value' => $value,
        //                 'updated_at' => new DateTime,
        //             ));

        $SelectedProduct->update();


        return redirect('/Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function ProductImgRemove($ProductId, $productImage)
    {
        $Selectedproduct = Product::where('id', $ProductId)->first();
        $ProductImages = unserialize($Selectedproduct->images);
        $filename = ('storage/Main/Products/' . $ProductId . '/' . $productImage);
        unlink($filename); //delete file
        $ProductImages = serialize(array_diff($ProductImages, array($productImage))); //remove item from image array
        $Selectedproduct->update(['images' => $ProductImages]);
        return back();
    }
}
