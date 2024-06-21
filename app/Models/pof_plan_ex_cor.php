<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_ex_cor extends Model
{
    use HasFactory;
    protected $fillable = [
        "planExCor_id",
        "planExCor_yearAssesment",
        "planExCor_yearInstallation",
        "planExCor_thicknessValue",
        "planExCor_baseCorrosionRate",
        "planExCor_finalCorrosionRate",
        "planExCor_shellTimeInService",
        "planExCor_headTimeInService",
        "planExCor_ageCoat",
        "planExCor_adjusmentCoat",
        "planExCor_age",
        "planExCor_minReqWallThickness",
        "planExCor_shellDFParameter",
        "planExCor_headDFParameter",
        "planExCor_flowStress",
        "planExCor_shellStrengthRatio",
        "planExCor_headStrengthRatio",
        "planExCor_numInspA",
        "planExCor_numInspB",
        "planExCor_numInspC",
        "planExCor_numInspD",
    ];
}
