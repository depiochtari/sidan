<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Nelayan;
use App\Kub;

class NelayanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datanelayan = Nelayan::all();
        $datanelayan ->load('kub');
		return view('nelayan.index', compact('datanelayan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datakub = Kub::all();
        return view('nelayan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Nelayan $nelayan)
    {
        $nelayan->create($request->all());
		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nelayan $nelayan)
    {
        $nelayan->report($request->all());
        return back();
        return view('nelayan.show', compact('nelayan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nelayan $nelayan)
    {
        $datanelayan = Nelayan::all();
        return view('nelayan.edit', compact('nelayan','datakub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nelayan $nelayan)
    {
        $nelayan->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nelayan $nelayan)
    {
        $nelayan->delete();
        return back();
    }

     public function report()
    {
        $datanelayan = Nelayan::all();
        return view('nelayan.report', compact('datanelayan','datakub' ));
    }
}
