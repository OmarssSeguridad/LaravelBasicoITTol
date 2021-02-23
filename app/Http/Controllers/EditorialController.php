<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editorial = Editorial::where('status', 1)->get();
        return view('editorial.consultaEditorial', compact('editorial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editorial.altaEditorial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            
        ]);

        $editorial = new Editorial([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'status' => 1,
        ]);

        $editorial->save();

        return redirect()->route('editorial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function show(Editorial $editorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Editorial $editorial)
    {
        return view('editorial.editarEditorial', compact('editorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editorial $editorial)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        //$editorial = Editorial::findOrFail($id);
        $editorial->nombre = $request->get('nombre');
        $editorial->descripcion = $request->get('descripcion');
        
        $editorial->save();
        return redirect()->route('editorial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editorial  $editorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editorial $editorial)
    {
        $editorial->status=0;
        $editorial->save();
        return redirect()->route('editorial.index');
    }
}
