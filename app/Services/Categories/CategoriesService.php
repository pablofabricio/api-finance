<?php

namespace App\Services\Values;

use App\Repositories\ValuesRepository;
use App\Services\BaseService;

class CategoriesService extends BaseService
{
    public function __construct(ValuesRepository $repository) 
    {
        $this->repository = $repository;
    }
}
