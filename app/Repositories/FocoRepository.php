<?php

namespace App\Repositories;
use App\Models\Foco;
use Illuminate\Database\Eloquent\Collection;

class FocoRepository
{
    public function __construct(protected Foco $model) {}

    public function diagnostic(): Collection
    {
        return $this->model->all();
    }

    public function create(array $data): Foco
    {
        return $this->model->create($data);
    }
}
