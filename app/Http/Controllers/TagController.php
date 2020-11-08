<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\LocaleContent;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tags = Tag::with('contents')->get();

        return view('PageElements.Dashboard.Setting.Tags', compact('Tags'));
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

        $Tags = new Tag;
        $Tags->save();
        $element_id = $Tags->id;
        $Contents = [];
        foreach (Locales() as $item) {
            $Contents[] = new LocaleContent([
                'page' => '',
                'section' => 'products',
                'element_id' => $element_id,
                'locale' => $item['locale'],
                'element_title' => 'tag',
                'element_content' => $request->input($item['locale']),
            ]);
        }
        $NewTag = Tag::find($element_id);
        $NewTag->contents()->saveMany($Contents);

        return redirect('/Tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($tag)
    {
        $EditTag = Tag::with('contents')->find($tag);
        return $EditTag;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Tag = Tag::find($request->input('TagId'));

        foreach (Locales() as $item) {
            LocaleContent::where(['section' => 'products', 'element_id' => $Tag->id, 'locale' => $item['locale'],])
                ->update(['element_content' => $request->input($item['locale'])]);
        }
        return redirect('/Tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($tag)
    {
        $id = per_digit_conv($tag);
        $Tag = Tag::find($id);
        $TagContent = LocaleContent::where(['element_title' => 'tag', 'element_id' => $id]);
        $TagContent->delete();
        $Tag->delete();
    }
}