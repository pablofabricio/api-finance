<?php

namespace App\Services\Values;

use App\Repositories\UsersRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;

class DashboardService extends BaseService
{
    public function __construct(
        private UsersRepository $usersRepository
    ) {}

    public function getUserContext(Request $request)
    {
        return $this->usersRepository->getCategoriesValuesByUser($request->user()->id);
    }
}
