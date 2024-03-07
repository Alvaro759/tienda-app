<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    /**
     * Muestra todos los categorias.
     */
    public function index()
    {
        $categorias = categoria::all();
        return view('categoria.index', compact('categorias'));
    }

    /**
     * Crea un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:70|min:5',
            'descripcion' => 'required|max:255',
        ]);
        categoria::create($request->all());

        return redirect()->route('categoria.index')->with('success', 'Categoria creado correctamente.');
    }

    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = categoria::find($id);

        return view('categoria.show', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:70|min:5',
            'descripcion' => 'required|max:255',
        ]);
        $categoria = categoria::find($id);
        $categoria->update($request->all());
        return redirect()->route('categoria.index')->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = categoria::find($id);

        $categoria->delete();

        return redirect()->route('categoria.index')
            ->with('success', 'Categoria borrado correctamente');
    }

    public function edit($id)
    {
        $categoria = categoria::find($id);

        return view('categoria.edit', compact('categoria'));
    }
}
