<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;
use App\Models\LocaleContent;

class LatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $LN = LatestNews::with('contents')->orderBy('id', 'DESC')->get();
        return view('PageElements.Dashboard.Setting.LatestNews', compact('LN'));
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
        $LN = new LatestNews;
        $LN->save();
        $element_id = $LN->id;
        $Contents = [];

        foreach (Locales() as $item) {
            $Contents[] = new LocaleContent([
                'page' => '',
                'section' => 'latestnews',
                'element_id' => $element_id,
                'locale' => $item['locale'],
                'element_title' => 'news_title',
                'element_content' => $request->input($item['locale'] . '_title'),
            ]);
            $Contents[] = new LocaleContent([
                'page' => '',
                'section' => 'latestnews',
                'element_id' => $element_id,
                'locale' => $item['locale'],
                'element_title' => 'news_description',
                'element_content' => $request->input($item['locale'] . '_description'),
            ]);
        }
        $NewLC = LatestNews::find($element_id);
        $NewLC->contents()->saveMany($Contents);

        return redirect('/LatestNews');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function show(LatestNews $latestNews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function edit($latestNews)
    {

        $LNEdit = LatestNews::with('contents')->find($latestNews);
        return $LNEdit;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $LN = LatestNews::find($request->input('LNId'));

        foreach (Locales() as $item) {
            LocaleContent::where(['section' => 'latestnews', 'element_id' => $LN->id, 'locale' => $item['locale'], 'element_title' => 'news_title'])
                ->update(['element_content' => $request->input($item['locale'] . '_title')]);

            LocaleContent::where(['section' => 'latestnews', 'element_id' => $LN->id, 'locale' => $item['locale'], 'element_title' => 'news_description'])
                ->update(['element_content' => $request->input($item['locale'] . '_description')]);
        }
        return redirect('/LatestNews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function destroy(LatestNews $latestNews)
    {
        //
    }
}