<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = [
        'name', 'description', 'start_date', 'end_date', 'user_id', 'difficulty', 'capacity', 'is_recurring'
    ];
}

