<?php

namespace App\Http\Controllers;

use App\Models\LocaleContent;
use App\Models\Product;
use App\Models\ProductCatalog;
use Illuminate\Http\Request;

class ProductCatalogController extends Controller
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
        return view('PageElements.Dashboard.Setting.Catalog', compact('product_ptypes', 'product_categories'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $SelectedProduct = ProductCatalog::where('product_id', $request->input('product'))->first();
        if ($SelectedProduct) {
            //exist so send to update
            $this->update($request, $SelectedProduct);
        } else {
            //not exist so create it
            $Catalog = new ProductCatalog;
            $images = [];
            if ($request->hasFile('catalog_images')) {
                $count = 0;
                foreach ($request->file('catalog_images') as $image) {
                    $uploaded = $image;
                    $filename = $request->input('product') . '_' . time() . $count++ . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                    $uploaded->storeAs('public\Main\Products\\' . $request->input('product') . '\catalogs\\', $filename);
                    $images[] = $filename;
                }
            }
            $Catalog->product_id=$request->input('product');
            $Catalog->catalog_images = serialize($images);
            $Catalog->save();

        }
        return redirect('/Catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCatalog $productCatalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCatalog $productCatalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, ProductCatalog $productCatalog)
    {
        $CatalogImages = unserialize($productCatalog->catalog_images);
        if ($request->hasFile('catalog_images')) {
            $count = 0;
            foreach ($request->file('catalog_images') as $image) {
                $uploaded = $image;
                $filename = $request->input('product') . '_' . time() . $count++ . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                $uploaded->storeAs('public\Main\Products\\' . $request->input('product') . '\catalogs\\', $filename);
                $CatalogImages[] = $filename;
            }
        }
        $productCatalog->catalog_images = serialize($CatalogImages);

        $productCatalog->update();
        return redirect('/Catalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ProductCatalog $productCatalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCatalog $productCatalog)
    {
        //
    }
}
