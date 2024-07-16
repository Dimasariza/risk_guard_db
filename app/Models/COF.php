<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class COF extends Model
{
    use HasFactory;
    protected $fillable = [
        "cof_componentId",
        "cof_massComponent",
        "cof_massInventory",
        "cof_representativeFluid",
        "cof_phaseOfFluid",
        "cof_releaseHoleSizeD1",
        "cof_releaseHoleSizeD2",
        "cof_releaseHoleSizeD3",
        "cof_releaseHoleSizeD4",
        "cof_liquidInventories",
        "cof_detectionSystem",
        "cof_isolationSystem",
        "cof_flamableCons",
        "cof_damageCons",
        "cof_adjToFlamable",
    ];
}
