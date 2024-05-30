<?php

namespace App\Http\Controllers;

use App\Http\Resources\Dashboard\DashboardResource;
use App\Services\Dashboard\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct(DashboardService $service) 
    {
        $this->service = $service;
    }

    public function index(Request $request): DashboardResource
    {
        return new DashboardResource($this->service->index($request));
    }
}
