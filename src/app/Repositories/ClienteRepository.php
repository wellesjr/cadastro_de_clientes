<?php

namespace App\Repositories;

use App\Models\Cliente;

class ClienteRepository
{
    protected $model;

    public function __construct(Cliente $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        $cliente = $this->model->findOrFail($id);
        $cliente->update($attributes);
        return $cliente;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function all()
    {
        return $this->model->all();
    }
}
