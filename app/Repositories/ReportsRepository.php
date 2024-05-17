<?php

namespace App\Repositories;

use App\Models\Report;
use Prettus\Repository\Eloquent\BaseRepository;

class ReportsRepository extends BaseRepository
{
    public function model()
    {
        return Report::class;
    }
}
