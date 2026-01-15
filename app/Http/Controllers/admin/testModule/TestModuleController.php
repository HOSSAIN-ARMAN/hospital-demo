<?php

namespace App\Http\Controllers\admin\testModule;

use App\Http\Controllers\Controller;
use App\TestItem;
use Illuminate\Http\Request;

class TestModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testModule.index');

        // return "|hi";
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
     * @param  \App\TestItem  $testItem
     * @return \Illuminate\Http\Response
     */
    public function show(TestItem $testItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TestItem  $testItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TestItem $testItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TestItem  $testItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestItem $testItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TestItem  $testItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestItem $testItem)
    {
        //
    }
}
