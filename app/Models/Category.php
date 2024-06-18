<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends BaseModel
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'percent',
        'user_id',
    ];

    protected $appends = [
        'years'
    ];

    public function getYearsAttribute()
    {
        $reportIds = $this->reports()->pluck('report_id')->toArray();

        return Report::whereIn('id', $reportIds)->pluck('year')->toArray();
    }

    public function values()
    {
        return $this->hasMany(Value::class);
    }

    public function reports()
    {
        return $this->hasMany(ReportCategory::class);
    }
}
