<?php

namespace App\Services;

use App\Repositories\ClienteRepository;

class ClienteService
{
    protected $repository;

    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function criarCliente(array $dados)
    {
        return $this->repository->create($dados);
    }

    public function atualizarCliente(array $dados, $id)
    {
        return $this->repository->update($dados, $id);
    }

    public function excluirCliente($id)
    {
        return $this->repository->delete($id);
    }

    public function buscarCliente($id)
    {
        return $this->repository->find($id);
    }

    public function listarClientes()
    {
        return $this->repository->all();
    }
}
