<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_value extends Model
{
    use HasFactory;
    protected $fillable = [
        "planValue_id",
        "planValue_gffTotal",
        "planValue_shellThinning",
        "planValue_headThinning",
        "planValue_shellExternal",
        "planValue_headExternal",
        "planValue_shellTotal",
        "planValue_headTotal",
        "planValue_shellSection",
        "planValue_headSection",
    ];
}
