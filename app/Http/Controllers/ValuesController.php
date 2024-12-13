<?php

namespace App\Http\Controllers;

use App\Http\Resources\Values\ValueResource;
use App\Services\Values\ValuesService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ValuesController extends BaseController
{
    public function __construct(ValuesService $service) 
    {
        parent::__construct($service, ValueResource::class);        
    }

    public function create(Request $request)
    {
        $this->service->create($request); 
        
        return response(null, Response::HTTP_CREATED);
    }
}
