<?php

namespace App\Services\Dashboard;

use App\Repositories\UsersRepository;
use App\Services\BaseService;
use Illuminate\Http\Request;

class DashboardService extends BaseService
{
    public function __construct(
        private UsersRepository $usersRepository
    ) {}

    public function index(Request $request)
    {
        $user = $this->usersRepository->getDashboard($request->user()->id);

        return $user;
    }
}
