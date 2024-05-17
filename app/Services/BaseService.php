<?php

namespace App\Services;

class BaseService implements BaseServiceInterface
{
    protected $repository;

    public function all()
    {
        return $this->repository->get();
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function destroy(string $id): void
    {
        $this->repository->delete($id);
    }

    public function create(array $data)
    {
        $this->repository->create($data);
    }
}
