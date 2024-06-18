<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dashboard\DashboardResource;
use App\Services\Dashboard\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct(
        DashboardService $service
    ) 
    {
        parent::__construct($service, DashboardResource::class);  
    }

    public function index(Request $request): DashboardResource
    {
        return new  $this->resource($this->service->index($request));
    }
}
