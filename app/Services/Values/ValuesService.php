<?php

namespace App\Services\Values;

use App\Models\Value;
use App\Repositories\ReportsRepository;
use App\Repositories\ValuesRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;

class ValuesService extends BaseService
{
    public function __construct(ValuesRepository $repository, protected ReportsRepository $reportsRepository) 
    {
        parent::__construct($repository);
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        foreach ($request->all() as $value) {
            $request->validate($this->repository->model()->getRules());
            
            $this->repository->create($value);
        }
    }
}
