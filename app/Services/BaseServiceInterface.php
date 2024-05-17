<?php

namespace App\Services;

interface BaseServiceInterface
{
    public function all();

    public function find(int $id);

    public function destroy(string $id);

    public function create(array $data);
}
