<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\LocaleContent;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $Galleries = Gallery::with(['contents' => function ($query) {
            $query->where('locale', '=', 'fa');
        }])->get();

        $GList = [];
        foreach ($Galleries as $key=>$gallery) {
            $GList[$key]['image'] = unserialize($gallery->images)[0];
            $GList[$key]['title'] = $gallery->contents[0]->element_content;
        }


        return view('PageElements.Dashboard.Setting.Gallery',compact('GList'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $Gallery = new Gallery;
        $Gallery->save();
        $element_id = $Gallery->id;
        $Contents = [];
        if ($request->g_title_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'gallery',
                    'section' => 'gallery',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'g_title_' . $item['locale'],
                    'element_content' => $request->input('g_title_' . $item['locale']),
                ]);
            }
        }
        $NewGallery = Gallery::find($element_id);
        $NewGallery->contents()->saveMany($Contents);

        $images = [];
        if ($request->hasFile('gallery_images')) {
            $count = 0;
            foreach ($request->file('gallery_images') as $image) {
                $uploaded = $image;
                $filename = $element_id . '_' . time() . $count++ . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
                $uploaded->storeAs('public\Main\Gallery\\' . $element_id . '\\', $filename);
                $images[] = $filename;
            }
        }
        $NewGallery->images = serialize($images);
        $NewGallery->update();

        return redirect('/Gallery');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
