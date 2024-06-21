<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_alkaline extends Model
{
    use HasFactory;
    protected $fillable = [
        "planAlkaline_id",
        "planAlkaline_shellSusceptibility",
        "planAlkaline_headSusceptibility",
        "planAlkaline_shellSeverityId",
        "planAlkaline_headSeverityId",
        "planAlkaline_ageTimeInService",
        "planAlkaline_sheelSection",
        "planAlkaline_headSection",
    ];
}
