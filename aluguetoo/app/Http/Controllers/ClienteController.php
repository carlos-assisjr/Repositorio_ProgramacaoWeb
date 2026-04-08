<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Exception;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

public function store(Request $request)
{
    try {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        Cliente::create($data);
    } catch (Exception $e) {
        Log::error('Erro ao inserir cliente: ' . $e->getMessage(), [
            'stack' => $e->getTraceAsString()
        ]);
    }

    return redirect()->route('clientes.index');
}

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
{
    try {
        $cliente = Cliente::findOrFail($id);

        $data = $request->all();

        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $cliente->update($data);
    } catch (Exception $e) {
        Log::error('Erro ao atualizar cliente: ' . $e->getMessage(), [
            'stack' => $e->getTraceAsString()
        ]);
    }

    return redirect()->route('clientes.index');
}

    public function destroy($id)
    {
        try {
            $cliente = Cliente::findOrFail($id);
            $cliente->delete();
        } catch (Exception $e) {
            Log::error('Erro ao excluir cliente: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString()
            ]);
        }

        return redirect()->route('clientes.index');
    }
}