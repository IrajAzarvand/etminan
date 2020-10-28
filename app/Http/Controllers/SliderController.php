<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $Sliders = Slider::all()->sortKeysDesc();
        return view('PageElements.Dashboard.Setting.Slider', compact('Sliders'));
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
        $rules = [
            'SliderImage' => ['required', 'max:49999', 'mimes:jpg,jpeg, png'],
        ];

        $this->validate($request, $rules);
        $Slider = new Slider;
        $filename = '';

        if ($request->hasFile('SliderImage')) {
            $uploaded = $request->file('SliderImage');
            $filename = time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
            $uploaded->storeAs('public\Sliders\\', $filename);
        }

        $Slider->title = $request->input('slider_title');
        $Slider->description = $request->input('slider_description');
        $Slider->image = $filename;

        $Slider->save();
        return redirect('/sliders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($slider)
    {
        $slider = per_digit_conv($slider);
        return Slider::find($slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $filename = $request->input('OldSliderImage');
        if ($request->hasFile('SliderImage')) {
            //remove previous file
            $filename = ('storage/Sliders/' . $filename);
            unlink($filename);
            //store new file
            $uploaded = $request->file('SliderImage');
            $filename = time() . '.' . $uploaded->getClientOriginalExtension();  //timestamps.extension
            $uploaded->storeAs('public\Sliders\\', $filename);
        }
        $Slider = Slider::find($request->input('SliderId'));
        $Slider->title = $request->input('slider_title');
        $Slider->description = $request->input('slider_description');
        $Slider->image = $filename;
        $Slider->save();
        return redirect('/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($slider)
    {
        $id = per_digit_conv($slider);
        $item = Slider::find($id);
        $filename = ('storage/Sliders/' . $item['image']);
        unlink($filename);
        $item->delete();
    }
}