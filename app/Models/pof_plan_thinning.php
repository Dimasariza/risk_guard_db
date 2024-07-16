<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_plan_thinning extends Model
{
    use HasFactory;
    protected $fillable = [
        "planThinning_id",
        "planThinning_componentId",
        "planThinning_corrosionRate",
        "planThinning_planDate",
        "planThinning_tMinInch",
        "planThinning_tMinMM",
        "planThinning_nInspA",
        "planThinning_nInspB",
        "planThinning_nInspC",
        "planThinning_nInspD",
        "planThinning_injectionPoints",
        "planThinning_deadLegs",
        "planThinning_weldingConstruction",
        "planThinning_astMaintenance",
        "planThinning_settlement",
        "planThinning_onlineMonitoring",
    ];
}
