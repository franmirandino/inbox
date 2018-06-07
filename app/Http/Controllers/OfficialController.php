<?php

namespace App\Http\Controllers;

use App\Official;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officials = Official::orderBy('id', 'DESC')->get();
        return view('officials.index', compact('officials'));
    }

    public function datosOfficial()
    {
        $data = DataTables::of(Official::query())->make(true);
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $official = Official::create($request->all());
        return redirect()->route('officials.index')->with('info', 'Funcionario agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function show(Official $official)
    {
        return view('officials.show', compact('official'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function edit(Official $official)
    {

        return view('officials.edit', compact('official'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Official $official)
    {
        $official->update($request->all());

        return redirect()->route('officials.index')->with('info', 'Funcionario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Official  $official
     * @return \Illuminate\Http\Response
     */
    public function destroy(Official $official)
    {
        $official->delete();

        return redirect()->route('officials.index')->with('info', 'El registro fue eliminado con éxito');
        
    }
}
