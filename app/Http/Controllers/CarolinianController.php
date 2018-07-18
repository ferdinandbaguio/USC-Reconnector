<?php

namespace App\Http\Controllers;

use App\Carolinian;
use Illuminate\Http\Request;
use App\Http\Requests\CarolinianRequest;
class CarolinianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carolinians.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carolinians.create');
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
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function show(Carolinian $carolinian)
    {
        return view('carolinians.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function edit(Carolinian $carolinian)
    {
        return view('carolinians.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carolinian $carolinian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carolinian  $carolinian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carolinian $carolinian)
    {
        //
    }
}
