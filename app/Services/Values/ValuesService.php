<?php

namespace App\Services\Values;

use App\Repositories\ReportsRepository;
use App\Repositories\ValuesRepository;
use App\Services\BaseService;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValuesService extends BaseService
{
    public function __construct(
        ValuesRepository $repository, 
        protected ReportsRepository $reportsRepository
    ) 
    {
        parent::__construct($repository);
        $this->repository = $repository;
    }

    public function create(Request $request)
    {
        $rules = $this->repository->model()->getRules();
        Validator::make($request->all(), $rules)->validateOrFail();
        
        foreach ($request->all() as $value) {
            if (!$value['recurrence']) {
                $value = $this->calculateEndDate($value);
            }    

            $this->repository->create($value);
        }
    }

    private function calculateEndDate($value)
    {
        //$value->end_date = DateTime($value['start_date']);
        //$value->end_date->add('+' . $value['installments'] . ' months');
        
        return $value; 
    }
}
