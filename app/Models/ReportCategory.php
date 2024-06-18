<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportCategory extends BaseModel
{
    use HasFactory;

    protected $table = 'reports_categories';

    protected $fillable = [
        'report_id',
        'category_id'     
    ];
}
