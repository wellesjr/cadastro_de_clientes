<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClienteService;

class ClienteController extends Controller
{
    protected $service;

    public function __construct(ClienteService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $clientes = $this->service->listarClientes();
        return view('clientes.index', compact('clientes'));
    }

    public function create(Request $request)
    {
        $dados = $request->only(['nome', 'email', 'telefone']);
        $this->service->criarCliente($dados);
        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }
        return redirect()->route('clientes.index');
    }

    public function update(Request $request, $id)
    {
        $dados = $request->only(['nome', 'email', 'telefone']);
        $this->service->atualizarCliente($dados, $id);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->route('clientes.index');
    }

    public function destroy(Request $request, $id){
        try {
            $clienteExcluido = $this->service->excluirCliente($id);
            if (!$clienteExcluido) {
                return response()->json(['success' => false, 'message' => 'Cliente não encontrado'], 404);
            }

            if ($request->ajax()) {
                return response()->json(['success' => true]);
            }

            return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
            }

            return redirect()->route('clientes.index')->with('error', 'Ocorreu um erro ao excluir o cliente');
        }
    }
}