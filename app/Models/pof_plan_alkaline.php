<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_alkaline extends Model
{
    use HasFactory;
    protected $fillable = [
        "planAlkaline_id",
        "planAlkaline_componentId",
        "planAlkaline_ph",
        "planAlkaline_numOfInspection",
        "planAlkaline_co3Consentration",
        "planAlkaline_dfacscc",
        "planAlkaline_shellPwht",
        "planAlkaline_headPwht",
        "planAlkaline_inspection"
    ];

    protected $casts = [
        "planAlkaline_shellPwht" => "boolean",
        "planAlkaline_headPwht" => "boolean",
    ];
}
