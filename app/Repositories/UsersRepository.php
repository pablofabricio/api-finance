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

    public function getCategoriesValuesByUser(int $userId)
    {
        return $this->model->with("categories.values")->where("id", $userId);
    }
}
