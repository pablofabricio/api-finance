<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
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
