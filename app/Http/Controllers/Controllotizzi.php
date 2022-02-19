<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Controllotizzi extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->get();
        return view('admin.home',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        //$users->breadtype = $request->breadtype;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->is_admin = $request->is_admin;
        $users->save();
        return redirect('admin/home');
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
    public function show( )
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
        $users = User::find($request->id);
        return view('admin.update', compact('users'));
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
        $users = User::find($request->id);
        $users->name = $request->name;
        //$users->breadtype = $request->breadtype;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->is_admin = $request->is_admin;
        $users->save();
        return redirect('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panini  $panini
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $users = User::find($request->id);
        $users->delete();
        return redirect('admin.home');
    }
}
