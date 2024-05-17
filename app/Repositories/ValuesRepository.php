<?php

namespace App\Repositories;

use App\Models\Value;
use Prettus\Repository\Eloquent\BaseRepository;

class ValuesRepository extends BaseRepository
{
    public function model()
    {
        return Value::class;
    }
}
