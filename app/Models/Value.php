<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Value extends BaseModel
{
    use HasFactory;

    protected $table = 'values';

    protected static $rules = [
        'name' => 'required|string',
        'description' => 'string',
        'amount' => 'required|number',
        'due_date' => '',
        'recurrence' => '',
        'installments' => '',
        'status' => '',
        'end_date' => '',
        'category_id' => '',
        'payment_methods_id' => '',
    ];

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
