<?php

namespace App\Http\Controllers;

use App\Services\Values\ValuesService;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct(ValuesService $service) 
    {
        $this->service = $service;
    }

    public function getUserContext(Request $request)
    {
        return $this->service->getUserContext($request);
    }
}
