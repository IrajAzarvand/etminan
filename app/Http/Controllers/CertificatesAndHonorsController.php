<?php

namespace App\Http\Controllers;

use App\Models\CertificatesAndHonors;
use App\Models\LocaleContent;
use App\Models\Product;
use Illuminate\Http\Request;

class CertificatesAndHonorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $CH = CertificatesAndHonors::with('contents')->get();
        return view('PageElements.Dashboard.Setting.CH', compact('CH'));
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

        $CH = new CertificatesAndHonors;
        $CH->save();
        $element_id = $CH->id;
        $Contents = [];
        if ($request->ChTitle_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'CH',
                    'section' => 'CH',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'ChTitle_' . $item['locale'],
                    'element_content' => $request->input('ChTitle_' . $item['locale']),
                ]);
            }
        }

        if ($request->ChDescription_fa) {
            foreach (Locales() as $item) {
                $Contents[] = new LocaleContent([
                    'page' => 'CH',
                    'section' => 'CH',
                    'element_id' => $element_id,
                    'locale' => $item['locale'],
                    'element_title' => 'ChDescription_' . $item['locale'],
                    'element_content' => $request->input('ChDescription_' . $item['locale']),
                ]);
            }
        }

        $NewCH = CertificatesAndHonors::find($element_id);
        $NewCH->contents()->saveMany($Contents);

        if ($request->hasFile('CH_image')) {
            $uploaded = $request->file('CH_image');
            $filename = $element_id . '_' . time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
            $uploaded->storeAs('public\Main\CH\\', $filename);
            $NewCH->Ch_Image = $filename;
        }
        $NewCH->update();

        return redirect('/CH');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function show(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }
}
