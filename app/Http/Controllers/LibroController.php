<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::where('status', 1)->get();
        return view('libro.consultaLibro', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.altaLibro');

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
            'id_editorial' => 'required',
            'id_clasificacion' => 'required',
            'isbn' => 'required',
            'tot_paginas' => 'required',
        ]);

        $libro = new Libro([
            'nombre' => $request->get('nombre'),
            'id_editorial' => $request->get('id_editorial'),
            'id_clasificacion' => $request->get('id_clasificacion'),
            'isbn' => $request->get('isbn'),
            'tot_paginas' => $request->get('tot_paginas'),
            'status' => 1,
        ]);

        $libro->save();

        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libro.editarLibro', compact('libro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        $request->validate([
            'nombre' => 'required',
            'id_editorial' => 'required',
            'id_clasificacion' => 'required',
            'isbn' => 'required',
            'tot_paginas' => 'required',
        ]);

        $libro->nombre = $request->get('nombre');
        $libro->id_editorial = $request->get('id_editorial');
        $libro->id_clasificacion = $request->get('id_clasificacion');
        $libro->isbn = $request->get('isbn');
        $libro->tot_paginas = $request->get('tot_paginas');
        
        $libro->save();
        return redirect()->route('libro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        $libro->status=0;
        $libro->save();
        return redirect()->route('libro.index');
    }
}
