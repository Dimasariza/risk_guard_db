<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pof_rbi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "rbi_id",
        "rbi_componentId",
        "rbi_fluidService",
        "rbi_typicalTempF",
        "rbi_designType",
        "rbi_discharge",
        "rbi_adjusmentFactor",
        "rbi_serviceSeverity",
        "rbi_envAdjusmentFactor",
        "rbi_inspEffectiveness",
        "rbi_confidenceFactor",
        "rbi_eventFreqFire",
        "rbi_eventFreqOverFilling",
        "rbi_protectedEquipment",
        "rbi_rbiDate",
    ];
}
