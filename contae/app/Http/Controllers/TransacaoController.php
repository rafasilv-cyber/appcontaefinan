<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TransacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transacoes = Transacao::all();
        return response()->json($transacoes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:receita,despesa',
            'categoria' => 'required|string|max:100',
            'data' => 'required|date',
        ]);

        try {

            $transacao = Transacao::create($validated);

            return response()->json([
                'message' => 'Transação criada com sucesso!',
                'transacao' => $transacao,
            ], 201);
        }

        catch (QueryException $e) {

            return response()->json([
                'message' => 'Erro ao criar a transação.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transacao $transacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transacao $transacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transacao $transacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transacao $transacao)
    {
        //
    }
}
