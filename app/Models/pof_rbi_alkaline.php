<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_alkaline extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiAlkaline_id",
        "rbiAlkaline_shellSusceptibility",
        "rbiAlkaline_headSusceptibility",
        "rbiAlkaline_shellSeverityId",
        "rbiAlkaline_headSeverityId",
        "rbiAlkaline_ageTimeInService",
        "rbiAlkaline_sheelSection",
        "rbiAlkaline_headSection",
    ];
}
