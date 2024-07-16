<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_value extends Model
{
    use HasFactory;
    protected $fillable = [
        "planValue_id",
        "planValue_componentId",
        "planValue_FMS",
        "planValue_failureFrequency",
    ];
}
