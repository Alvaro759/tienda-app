<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = user::all();
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:70|min:5',
            'email' => 'required|max:70',
        ]);
        user::create($request->all());

        return redirect()->route('usuario.index')->with('success', 'Usuario creado correctamente.');
    }

    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = user::find($id);

        return view('usuario.show', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:70|min:5',
            'email' => 'required|max:70',
        ]);
        $usuario = user::find($id);
        $usuario->update($request->all());
        return redirect()->route('usuario.index')->with('success', 'Modificación realizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = user::find($id);

        $usuario->delete();

        return redirect()->route('usuario.index')
            ->with('success', 'Usuario borrado correctamente');
    }

    public function edit($id)
    {
        $usuario = user::find($id);

        return view('usuario.edit', compact('usuario'));
    }
}
