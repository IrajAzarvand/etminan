<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    public function edit($CH)
    {
        $SelectedCH =CertificatesAndHonors::where('id', $CH)->with('contents')->first();
        $CHImage = asset('storage/Main/CH/'.$SelectedCH->Ch_Image);
        return [$SelectedCH,$CHImage];

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $SelectedCH = CertificatesAndHonors::where('id', $request->input('CHId'))->with('contents')->first();
        $element_id = $SelectedCH->id;

        $SelectedCHImage = $SelectedCH->Ch_Image;
        if ($request->hasFile('CH_image')) {
//            remove previous image
            $ImagePath='storage/Main/CH/';
            unlink($ImagePath.$SelectedCHImage);

            $uploaded = $request->file('CH_image');
            $filename = $element_id . '_' . time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
            $uploaded->storeAs('public\Main\CH\\', $filename);
            $SelectedCH->Ch_Image = $filename;

        }

        if ($request->CH_Title_fa) {
            foreach (Locales() as $item) {
                $SelectedCH->contents()->updateOrInsert(
                    [
                        'page' => 'CH',
                        'section' => 'CH',
                        'element_id' => $element_id,
                        'locale' => $item['locale'],
                        'element_title' => 'ChTitle_' . $item['locale'],
                    ],
                    [
                        'element_content' => $request->input('CH_Title_' . $item['locale']),
                    ]
                );
            }
        }


        if ($request->CH_Desc_fa) {
            foreach (Locales() as $item) {
                $SelectedCH->contents()->updateOrInsert(
                    [
                        'page' => 'CH',
                        'section' => 'CH',
                        'element_id' => $element_id,
                        'locale' => $item['locale'],
                        'element_title' => 'ChDescription_' . $item['locale'],
                    ],
                    [
                        'element_content' => $request->input('CH_Desc_' . $item['locale']),
                    ]
                );
            }
        }



        $SelectedCH->update();
        return redirect('/CH');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CertificatesAndHonors $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function destroy($CH)
    {
        $SelectedCH = CertificatesAndHonors::find($CH);
        $CHImage = $SelectedCH->Ch_Image;
        $CHImagesFolder = 'storage/Main/CH/';
        $filename = ($CHImagesFolder . $CHImage);
        unlink($filename); //delete file
        $SelectedCH->contents()->delete();
        $SelectedCH->delete();
        return true;
    }
}
