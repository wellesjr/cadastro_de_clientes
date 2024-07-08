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

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $dados = $request->only(['nome', 'email', 'telefone']);
        $this->service->criarCliente($dados);
        return redirect()->route('clientes.index');
    }

    public function edit($id)
    {
        $cliente = $this->service->buscarCliente($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $dados = $request->only(['nome', 'email', 'telefone']);
        $this->service->atualizarCliente($dados, $id);
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        $this->service->excluirCliente($id);
        return redirect()->route('clientes.index');
    }
}