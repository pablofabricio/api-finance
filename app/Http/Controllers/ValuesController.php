<?php

namespace App\Http\Controllers;

use App\Services\Values\ValuesService;

class ValuesController extends BaseController
{
    public function __construct(ValuesService $service) 
    {
        $this->service = $service;
    }
}
