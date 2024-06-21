<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_thinning extends Model
{
    use HasFactory;
    protected $fillable = [
        "planThinning_id",
        "planThinning_startDate",
        "planThinning_thickness",
        "planThinning_corrosionAllowance",
        "planThinning_designTemperature",
        "planThinning_designPressure",
        "planThinning_operatingTemperature",
        "planThinning_operatingPressure",
        "planThinning_designCode",
        "planThinning_equipmentType",
        "planThinning_componentType",
        "planThinning_geometryData",
        "planThinning_materialSpecification",
        "planThinning_yieldStrength",
        "planThinning_tensileStrength",
        "planThinning_weldJointEfficiency",
        "planThinning_heatTracing",
    ];
}
