<?php

namespace App\Http\Controllers;

use App\Models\CertificatesAndHonors;
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
        return view('PageElements.Dashboard.Setting.CH');
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
     * @param  \App\Models\CertificatesAndHonors  $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function show(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificatesAndHonors  $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificatesAndHonors  $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificatesAndHonors  $certificatesAndHonors
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificatesAndHonors $certificatesAndHonors)
    {
        //
    }
}
