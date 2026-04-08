<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ferramenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class FerramentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ferramentas = Ferramenta::all();
        return view('ferramenta.index', compact('ferramentas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view("ferramenta.create", compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Ferramenta::create($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao inserir ferramenta: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }
        return redirect()->route('ferramentas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ferramenta = Ferramenta::findOrFail($id);
        return view("ferramenta.show", compact('ferramenta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ferramenta = Ferramenta::findOrFail($id);
        $categorias = Categoria::all();
        return view('ferramenta.edit', compact('categorias', 'ferramenta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $ferramenta = Ferramenta::findOrFail($id);
            $ferramenta->update($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao alterar ferramenta: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }
        return redirect()->route('ferramentas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $ferramenta = Ferramenta::findOrFail($id);
            $ferramenta->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir ferramenta: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }
        return redirect()->route('ferramentas.index');
    }
}
