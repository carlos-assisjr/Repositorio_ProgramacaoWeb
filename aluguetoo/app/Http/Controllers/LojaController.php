<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lojas = Loja::all();
        return view('loja.index', compact('lojas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Loja::create($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao inserir loja: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('lojas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $loja = Loja::findOrFail($id);
        return view('loja.show', compact('loja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $loja = Loja::findOrFail($id);
        return view('loja.edit', compact('loja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $loja = Loja::findOrFail($id);
            $loja->update($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao alterar loja: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('lojas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $loja = Loja::findOrFail($id);
            $loja->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir loja: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('lojas.index');
    }
}