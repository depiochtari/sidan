<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AhliWaris;
use App\Nelayan;

class AhliWarisController extends Controller
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
        $data_waris = ahliwaris::all();
        $data_waris->load('nelayan');
        return view('waris.index', compact('data_waris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datanelayan = Nelayan::all();
        return view('waris.create', compact('datanelayan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AhliWaris $ahli_waris)
    {
        $ahli_waris->create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AhliWaris $ahli_waris)
    {
         $ahli_waris->report($request->all());
         return back();
        return view('waris.show', compact('ahli_waris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AhliWaris $ahli_waris)
    {
        $data_nelayan = Nelayan::all();
        return view('waris.edit', compact('ahli_waris', 'datanelayan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AhliWaris $ahli_waris)
    {
        $ahli_waris->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AhliWaris $ahli_waris)
    {
        $ahli_waris->delete();
        return back();
    }


    public function report()
    {
        $data_waris = AhliWaris::all();
        return view('waris.report', compact('data_waris','datanelayan' ));
    }
}
