<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listado-personajes', [ 'personajes' => Personaje::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nuevo-personaje');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personaje::create($request->all());
        return redirect('/personajes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        return view('detalle-personaje', [ 'personaje' => $personaje ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        return view('editar-personaje', [ 'personaje' => $personaje ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        $personaje->update($request->all());
        return redirect('/personajes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();
        return redirect('/personajes');
    }
}
