<?php

namespace App\Services\Values;

use App\Repositories\ReportsRepository;
use App\Services\BaseService;

class ReportsService extends BaseService
{
    public function __construct(ReportsRepository $repository) 
    {
        $this->repository = $repository;
    }
}
