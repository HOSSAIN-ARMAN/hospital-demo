<?php

namespace App\Http\Controllers;

use App\cSystemModel;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.systemController.create");
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
     * @param  \App\cSystemModel  $cSystemModel
     * @return \Illuminate\Http\Response
     */
    public function show(cSystemModel $cSystemModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cSystemModel  $cSystemModel
     * @return \Illuminate\Http\Response
     */
    public function edit(cSystemModel $cSystemModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cSystemModel  $cSystemModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cSystemModel $cSystemModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cSystemModel  $cSystemModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(cSystemModel $cSystemModel)
    {
        //
    }
}
