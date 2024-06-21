<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_thinning extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiThinning_id",
        "rbiThinning_startDate",
        "rbiThinning_thickness",
        "rbiThinning_corrosionAllowance",
        "rbiThinning_designTemperature",
        "rbiThinning_designPressure",
        "rbiThinning_operatingTemperature",
        "rbiThinning_operatingPressure",
        "rbiThinning_designCode",
        "rbiThinning_equipmentType",
        "rbiThinning_componentType",
        "rbiThinning_geometryData",
        "rbiThinning_materialSpecification",
        "rbiThinning_yieldStrength",
        "rbiThinning_tensileStrength",
        "rbiThinning_weldJointEfficiency",
        "rbiThinning_heatTracing",
    ];
}
