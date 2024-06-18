<?php

namespace App\Services;

use Illuminate\Http\Request;

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

    public function create(Request $request)
    {
        $this->repository->create($request->all());
    }
    
    public function update(Request $request)
    {
        $this->repository->update($request->all());
    }
}
