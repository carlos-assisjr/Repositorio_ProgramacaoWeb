<?php
namespace App\Http\Controllers;
use App\Models\Aluguel;
use App\Models\User;
use App\Models\UnidadeProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Exception;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alugueis = Aluguel::all();
        return view('aluguel.index', compact('alugueis'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $users = User::all();
    $unidades = UnidadeProduto::where('status', 'DISPONIVEL')->get();

    return view('aluguel.create', compact('users', 'unidades'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aluguel::create($request->all());
        return redirect()->route('alugueis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aluguel = Aluguel::findOrFail($id);
        return view("aluguel.show", compact('aluguel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aluguel = Aluguel::findOrFail($id);
        return view('aluguel.edit', compact('aluguel'));
    }
}