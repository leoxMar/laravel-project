<?php

namespace App\Http\Controllers;

use App\Models\Panini;
use Illuminate\Http\Request;

class PaniniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panini = Panini::orderBy('id','ASC')->get();
        return view('menu',compact('panini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $panini = new Panini;
        $panini->name = $request->name;
        $panini->breadtype = $request->breadtype;
        $panini->price = $request->price;
        $panini->save();
        return redirect('create-panino');
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
     * @param  \App\Models\Panini  $panini
     * @return \Illuminate\Http\Response
     */
    public function show(Panini $panini)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panini  $panini
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $panini = Panini::find($request->id);
        return view('update', compact('panini'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panini  $panini
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $panini = Panini::find($request->id);
        $panini->name = $request->name;
        $panini->breadtype = $request->breadtype;
        $panini->price = $request->price;
        $panini->save();
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panini  $panini
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $panini = Panini::find($request->id);
        $panini->delete();
        return redirect('menu');
    }
}
