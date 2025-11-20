<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listado-paises', [ 'paises' => Pais::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nuevo-pais');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pais::create($request->all());
        return redirect('/paises');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $paise)
    {
        $densidad = $paise->habitantes / $paise->superficie;
        return view('detalle-pais', [ 'pais' => $paise, 'densidad' => $densidad ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pais $paise)
    {
        return view('editar-pais', [ 'pais' => $paise ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pais $paise)
    {
        $paise->update($request->all());
        return redirect('/paises');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pais $paise)
    {
        $paise->delete();
        return redirect('/paises');
    }
}
