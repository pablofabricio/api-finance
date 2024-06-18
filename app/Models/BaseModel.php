<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected static $rules = [];

    public function getRules()
    {
        return static::$rules;
    }
}
