<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class AluguelController extends Controller
{
    public function index()
    {
        $alugueis = Aluguel::with('cliente')->get();
        return view('aluguel.index', compact('alugueis'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('aluguel.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        try {
            Aluguel::create($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao inserir aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('alugueis.index');
    }

    public function show($id)
    {
        $aluguel = Aluguel::with('cliente')->findOrFail($id);
        return view('aluguel.show', compact('aluguel'));
    }

    public function edit($id)
    {
        $aluguel = Aluguel::findOrFail($id);
        $clientes = Cliente::all();
        return view('aluguel.edit', compact('aluguel', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        try {
            $aluguel = Aluguel::findOrFail($id);
            $aluguel->update($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao atualizar aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('alugueis.index');
    }

    public function destroy($id)
    {
        try {
            $aluguel = Aluguel::findOrFail($id);
            $aluguel->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('alugueis.index');
    }
}