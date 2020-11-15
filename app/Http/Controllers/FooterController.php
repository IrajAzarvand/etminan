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
        $Footer = Footer::with('contents')->get();

        return view('PageElements.Dashboard.Setting.Footer', compact('Footer'));
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
    public function edit($footer)
    {
        $EditFooter = Footer::with('contents')->find($footer);
        return $EditFooter;
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
            LocaleContent::where(['section' => 'footer', 'element_id' => $Footer->id, 'locale' => $item['locale'],])
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
        $id = per_digit_conv($footer);
        $Tag = Footer::find($id);
        $TagContent = LocaleContent::where(['element_title' => 'address', 'element_id' => $id]);
        $TagContent->delete();
        $Tag->delete();
    }
}