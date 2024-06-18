<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends BaseModel
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = [
        'year',
        'description',
        'user_id',
        'budget',
    ];

    public function categories()
    {
        $this->belongsToMany(Category::class)->withPivot('created_by');
    }

    public function values()
    {
        $this->belongsToMany(Value::class)->withPivot('status', 'created_by');
    }
}
