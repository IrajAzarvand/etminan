<?php

namespace App\Http\Controllers;

use App\Models\LatestNews;
use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'this is latest news index';
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