<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PouzivatelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pouzivatel=\App\Pouzivatel::all();
        return view('index',compact('pouzivatel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pouzivatel= new \App\Pouzivatel;
        $pouzivatel->login=$request->get('login');
        $pouzivatel->heslo=$request->get('heslo');
        $pouzivatel->email=$request->get('email');
        $pouzivatel->save();

        return redirect('reality')->with('success', 'Pouzivatel pridany.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pouzivatel = \App\Pouzivatel::find($id);
        return view('edit', compact('pouzivatel', 'id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pouzivatel= \App\Pouzivatel::find($id);
        $pouzivatel->login=$request->get('login');
        $pouzivatel->heslo=$request->get('heslo');
        $pouzivatel->email=$request->get('email');
        $pouzivatel->save();
        return redirect('reality')->with('success','Pouzivatel upraveny.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pouzivatel = \App\Pouzivatel::find($id);
        $pouzivatel->delete();
        return redirect('reality')->with('success','Pouzivatel vymazany.');
    }
}
