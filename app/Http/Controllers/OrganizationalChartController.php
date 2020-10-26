<?php

namespace App\Http\Controllers;

use App\Models\OrganizationalChart;
use Illuminate\Http\Request;

class OrganizationalChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('PageElements.Dashboard.Setting.OC');
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
     * @param  \App\Models\OrganizationalChart  $organizationalChart
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationalChart $organizationalChart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrganizationalChart  $organizationalChart
     * @return \Illuminate\Http\Response
     */
    public function edit(OrganizationalChart $organizationalChart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrganizationalChart  $organizationalChart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrganizationalChart $organizationalChart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrganizationalChart  $organizationalChart
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationalChart $organizationalChart)
    {
        //
    }
}
