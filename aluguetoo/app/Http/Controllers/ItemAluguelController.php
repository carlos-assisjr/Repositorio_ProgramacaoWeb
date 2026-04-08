<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Ferramenta;
use App\Models\ItemAluguel;
use App\Models\Loja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class ItemAluguelController extends Controller
{
    public function index()
    {
        $itensAluguel = ItemAluguel::with(['aluguel', 'ferramenta', 'lojaRetirada', 'lojaDevolucao'])->get();
        return view('item_aluguel.index', compact('itensAluguel'));
    }

    public function create()
    {
        $alugueis = Aluguel::all();
        $ferramentas = Ferramenta::all();
        $lojas = Loja::all();

        return view('item_aluguel.create', compact('alugueis', 'ferramentas', 'lojas'));
    }

    public function store(Request $request)
    {
        try {
            ItemAluguel::create($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao inserir item do aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('itens_aluguel.index');
    }

    public function show($id)
    {
        $item = ItemAluguel::with(['aluguel', 'ferramenta', 'lojaRetirada', 'lojaDevolucao'])->findOrFail($id);
        return view('item_aluguel.show', compact('item'));
    }

    public function edit($id)
{
    $item = ItemAluguel::findOrFail($id);
    $alugueis = Aluguel::all();
    $ferramentas = Ferramenta::all();
    $lojas = Loja::all();

    return view('item_aluguel.edit', compact('item', 'alugueis', 'ferramentas', 'lojas'));
}

    public function update(Request $request, $id)
    {
        try {
            $item = ItemAluguel::findOrFail($id);
            $item->update($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao alterar item do aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('itens_aluguel.index');
    }

    public function destroy($id)
    {
        try {
            $item = ItemAluguel::findOrFail($id);
            $item->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir item do aluguel: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('itens_aluguel.index');
    }
}