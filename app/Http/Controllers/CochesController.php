<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;
class CochesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $marca = $request->input('marca');
        $color = $request->input('color');
        $precio = $request->input('precio');

        $coches = Coche::marca($marca)
        ->color($color)
        ->precio((int)$precio)
        ->get();

        return view('coches', compact('coches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearCoche');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'precio' => 'required',
        ]);
        Coche::create($request->all());
        return redirect()->route('listaCoches')->with('success', 'Coche agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coche = Coche::findOrFail($id);
        return view('editarCoche', compact('coche'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $coche = Coche::findOrFail($id);
        $request->validate([
            'marca' => 'required', 
            'modelo' => 'required',
            'color' => 'required',
            'precio' => 'required',
        ]);
        $coche->update($request->all());
        return redirect()->route('listaCoches')->with('success', 'Coche actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coche = Coche::findOrFail($id);
        $coche->delete();
        return redirect()->route('listaCoches')->with('success', 'Coche eliminado correctamente');
    }
    
}
