<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Models\LocaleContent;


class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Address = Footer::with(['contents' => function ($query) {
            $query->where('element_title', 'address');
        }])->get();

        $CopyRight = Footer::with(['contents' => function ($query) {
            $query->where('element_title', 'copyright');
        }])->get();

        return view('PageElements.Dashboard.Setting.Footer', compact('Address', 'CopyRight'));
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

        $Footer = new Footer;
        $Footer->save();
        $element_id = $Footer->id;
        $Contents = [];

        if ($request->Address_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => '',
                    'section' => 'footer',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'address',
                    'element_content' => $request->input('Address_' . $item['locale']),
                ]);
            }
        }

        if ($request->CopyRight_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => '',
                    'section' => 'footer',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'copyright',
                    'element_content' => $request->input('CopyRight_' . $item['locale']),
                ]);
            }
        }

        $NewFooter = Footer::find($element_id);
        $NewFooter->contents()->saveMany($Contents);
        return redirect('/Footer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit($element_id)
    {
        $LC = LocaleContent::find($element_id);
        $footer = Footer::find($LC['element_id']);

        if ($LC['element_title'] == 'address') {
            $Contents = Footer::with(['contents' => function ($query) {
                $query->where('element_title', 'address');
            }])->find($LC['element_id']);
        } elseif ($LC['element_title'] == 'copyright') {
            $Contents = Footer::with(['contents' => function ($query) {
                $query->where('element_title', 'copyright');
            }])->find($LC['element_id']);
        }


        return $Contents;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Footer = Footer::find($request->input('FooterId'));

        foreach (Locales() as $item) {
            LocaleContent::where(['section' => 'footer', 'element_id' => $Footer->id, 'element_title' => $request->input('element_title'), 'locale' => $item['locale'],])
                ->update(['element_content' => $request->input($item['locale'])]);
        }
        return redirect('/Footer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy($footer)
    {
        //
    }
}
