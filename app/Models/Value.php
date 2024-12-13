<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Value extends BaseModel
{
    use HasFactory;

    protected $table = 'values';

    protected static $rules = [
        'name' => 'required|string|max:255',
        'amount' => 'required|numeric',
        'category_id' => 'required|integer|exists:categories,id',
        'payment_methods_id' => 'required|integer|exists:payment_methods,id',
        'recurrence' => 'required|boolean',
        'due_date' => 'required_if:recurrence,false|date',
        'installments' => 'required_if:recurrence,true|integer|min:1',
        'start_date' => 'required_if:recurrence,true|date',
    ];

    protected $fillable = [
        'name',
        'amount',
        'due_date',
        'recurrence',
        'installments',
        'status',
        'start_date',
        'end_date',
        'category_id',
        'payment_methods_id',
    ];
}
