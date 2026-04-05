<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\UnidadeProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class UnidadeProdutoController extends Controller
{
    public function index()
    {
        $unidades = UnidadeProduto::all();
        return view('unidade_produto.index', compact('unidades'));
    }

    public function create()
    {
        $produtos = Produto::all();
        return view('unidade_produto.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        try {
            UnidadeProduto::create($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao inserir unidade do produto: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('unidades_produtos.index');
    }

    public function show($id)
    {
        $unidade = UnidadeProduto::findOrFail($id);
        return view('unidade_produto.show', compact('unidade'));
    }

    public function edit($id)
    {
        $unidade = UnidadeProduto::findOrFail($id);
        $produtos = Produto::all();

        return view('unidade_produto.edit', compact('unidade', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        try {
            $unidade = UnidadeProduto::findOrFail($id);
            $unidade->update($request->all());
        } catch (Exception $e) {
            Log::error('Erro ao alterar unidade do produto: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('unidades_produtos.index');
    }

    public function destroy($id)
    {
        try {
            $unidade = UnidadeProduto::findOrFail($id);
            $unidade->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir unidade do produto: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('unidades_produtos.index');
    }
}