<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportCategory extends Model
{
    use HasFactory;

    protected $table = 'reports_categories';

    protected $fillable = [
        'report_id',
        'category_id'     
    ];
}
