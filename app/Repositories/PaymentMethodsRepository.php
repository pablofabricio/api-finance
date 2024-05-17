<?php

namespace App\Repositories;

use App\Models\PaymentMethod;
use Prettus\Repository\Eloquent\BaseRepository;

class PaymentMethodsRepository extends BaseRepository
{
    public function model()
    {
        return PaymentMethod::class;
    }
}
