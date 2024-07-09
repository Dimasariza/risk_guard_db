<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi_thinning extends Model
{
    use HasFactory;
    protected $fillable = [
        "rbiThinning_id",
        "rbiThinning_componentId",
        "rbiThinning_corrosionRate",
        "rbiThinning_rbiDate",
        "rbiThinning_tMinInch",
        "rbiThinning_tMinMM",
        "rbiThinning_nInspA",
        "rbiThinning_nInspB",
        "rbiThinning_nInspC",
        "rbiThinning_nInspD",
        "rbiThinning_injectionPoints",
        "rbiThinning_deadLegs",
        "rbiThinning_weldingConstruction",
        "rbiThinning_astMaintenance",
        "rbiThinning_settlement",
        "rbiThinning_onlineMonitoring",
    ];
}
