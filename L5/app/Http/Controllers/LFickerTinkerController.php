<?php

namespace App\Http\Controllers;

use App\L_Ficker_Tinker;
use Illuminate\Http\Request;

class LFickerTinkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $p = L_Ficker_Tinker::paginate(2);
        // $p = L_Ficker_Tinker::simplePaginate(2); // For Simple Next and Previous Button Pagination
        
        return view('pagination-view',compact('p'));
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
     * @param  \App\L_Ficker_Tinker  $l_Ficker_Tinker
     * @return \Illuminate\Http\Response
     */
    public function show(L_Ficker_Tinker $l_Ficker_Tinker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\L_Ficker_Tinker  $l_Ficker_Tinker
     * @return \Illuminate\Http\Response
     */
    public function edit(L_Ficker_Tinker $l_Ficker_Tinker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\L_Ficker_Tinker  $l_Ficker_Tinker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L_Ficker_Tinker $l_Ficker_Tinker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\L_Ficker_Tinker  $l_Ficker_Tinker
     * @return \Illuminate\Http\Response
     */
    public function destroy(L_Ficker_Tinker $l_Ficker_Tinker)
    {
        //
    }
}
