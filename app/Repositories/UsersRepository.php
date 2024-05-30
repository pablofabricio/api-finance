<?php

namespace App\Repositories;

use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UsersRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function getDashboard(int $userId)
    {
        return $this->model
            ->with([
                "reports" => function($query) {
                    $query->orderBy('year', 'desc'); 
                },
                "categories.values",
            ])
            ->where('id', $userId)
            ->get()
            ->first();
    }
}
