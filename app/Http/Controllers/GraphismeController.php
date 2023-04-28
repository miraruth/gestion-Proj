<?php

namespace App\Http\Controllers;

use App\Models\Graphisme;
use Illuminate\Http\Request;

class GraphismeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projet.charts');
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
     * @param  \App\Models\Graphisme  $graphisme
     * @return \Illuminate\Http\Response
     */
    public function show(Graphisme $graphisme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graphisme  $graphisme
     * @return \Illuminate\Http\Response
     */
    public function edit(Graphisme $graphisme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graphisme  $graphisme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graphisme $graphisme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graphisme  $graphisme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graphisme $graphisme)
    {
        //
    }
}
