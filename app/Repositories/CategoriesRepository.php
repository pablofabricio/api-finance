<?php

namespace App\Repositories;

use App\Models\Category;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoriesRepository extends BaseRepository
{
    public function model()
    {
        return Category::class;
    }
}
