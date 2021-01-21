<?php

namespace App\Http\Controllers;

use App\Models\CI;
use App\Models\LocaleContent;
use Illuminate\Http\Request;

class CIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CIs = CI::with(['contents' => function ($query) {
            $query->where('locale', '=', 'fa');
        }])->get();

        $CIList = [];
        foreach ($CIs as $key=>$CI) {
            $CIList[$key]['id'] = $CI->id;
            $CIList[$key]['title'] = $CI->contents[0]->element_content;
        }
        return view('PageElements.Dashboard.Setting.CI',compact('CIList'));
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

        $CI = new CI;
        $CI->save();
        $element_id = $CI->id;
        $Contents = [];
        if ($request->CITitle_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'CI',
                    'section' => 'CI',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'CITitle_' . $item['locale'],
                    'element_content' => $request->input('CITitle_' . $item['locale']),
                ]);
            }
        }

        if ($request->CIDescription_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'CI',
                    'section' => 'CI',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'CIDescription_' . $item['locale'],
                    'element_content' => $request->input('CIDescription_' . $item['locale']),
                ]);
            }
        }

        $NewCI = CI::find($element_id);
        $NewCI->contents()->saveMany($Contents);
        $NewCI->update();

        return redirect('/CI');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function show(CI $cI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function edit($cI)
    {
        $SelectedCI =CI::where('id', $cI)->with('contents')->first();
        return $SelectedCI;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $SelectedCI = CI::where('id', $request->input('CI_Id'))->with('contents')->first();
        $element_id = $SelectedCI->id;

        if ($request->CI_Title_fa) {
            foreach (Locales() as $item) {
                $SelectedCI->contents()->updateOrInsert(
                    [
                        'page' => 'CI',
                        'section' => 'CI',
                        'element_id' => $element_id,
                        'locale' => $item['locale'],
                        'element_title' => 'CITitle_' . $item['locale'],
                    ],
                    [
                        'element_content' => $request->input('CI_Title_' . $item['locale']),
                    ]
                );
            }
        }


        if ($request->CI_Desc_fa) {
            foreach (Locales() as $item) {
                $SelectedCI->contents()->updateOrInsert(
                    [
                        'page' => 'CI',
                        'section' => 'CI',
                        'element_id' => $element_id,
                        'locale' => $item['locale'],
                        'element_title' => 'CIDescription_' . $item['locale'],
                    ],
                    [
                        'element_content' => $request->input('CI_Desc_' . $item['locale']),
                    ]
                );
            }
        }



        $SelectedCI->update();
        return redirect('/CI');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function destroy($cI)
    {
        $SelectedCI = CI::find($cI);
        $SelectedCI->contents()->delete();
        $SelectedCI->delete();
        return true;
    }
}
