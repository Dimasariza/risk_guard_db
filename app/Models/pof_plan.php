<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "plan_componentId",
        "plan_fluidService",
        "plan_typicalTempF",
        "plan_designType",
        "plan_discharge",
        "plan_adjusmentFactor",
        "plan_serviceSeverity",
        "plan_envAdjusmentFactor",
        "plan_inspEffectiveness",
        "plan_confidenceFactor",
        "plan_eventFreqFire",
        "plan_eventFreqOverFilling",
        "plan_protectedEquipment",
        "plan_planDate",
    ];
}
