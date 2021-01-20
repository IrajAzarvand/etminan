<?php

namespace App\Http\Controllers;

use App\Models\CI;
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
        return view('PageElements.Dashboard.Setting.CI');
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
        //
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
    public function edit(CI $cI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CI $cI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CI  $cI
     * @return \Illuminate\Http\Response
     */
    public function destroy(CI $cI)
    {
        //
    }
}
