<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;

    protected $table = 'values';

    protected $fillable = [
        'name',
        'description',
        'amount',
        'due_date',
        'recurrence',
        'installments',
        'status',
        'end_date',
        'category_id',
        'payment_methods_id',
    ];
}
