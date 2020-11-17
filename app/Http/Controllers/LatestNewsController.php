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
        $LN = LatestNews::with('contents')->get();
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
        $news = [];

        foreach (Locales() as $item) {
            $news[] = [

                [
                    'page' => '',
                    'section' => 'latestnews',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'news_title',
                    'element_content' => $request->input($item['locale'] . '_title'),
                ],
                [
                    'page' => '',
                    'section' => 'latestnews',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'news_description',
                    'element_content' => $request->input($item['locale'] . '_description'),
                ]
            ];
        }
        $Contents = new LocaleContent($news);

        $NewLC = LatestNews::find($element_id);
        $NewLC->contents()->saveMany($Contents);

        // return redirect('/LatestNews');
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
    public function edit(LatestNews $latestNews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LatestNews  $latestNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LatestNews $latestNews)
    {
        //
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