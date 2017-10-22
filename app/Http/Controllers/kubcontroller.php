<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kub;
use App\nelayan;

class kubcontroller extends Controller
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
        $datakub = kub::all();
        return view('kub.index', compact('datakub'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datanelayan = Nelayan::all();
        return view('kub.create', compact('datanelayan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kub $kub)
    {
        $kub->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kub $kub)
    {
        $kub->report($nelayan->all());
         return back();
        return view('kub.show', compact('kub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kub $kub)
    {
        $datanelayan = Nelayan::all();
        return view('kub.edit', compact('kub', 'datanelayan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kub $kub)
    {
        $kub->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kub $kub)
    {
        $kub->delete();
        return back();
    }

        public function report()
    {
        $data_kub = Kub::all();
        return view('kub.report', compact('data_kub'));
    }
}
