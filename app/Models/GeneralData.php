<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        "gData_id",
        "gData_componentId",
        "gData_tagNumber",
        "gData_service",
        "gData_manufacturedBy",
        "gData_typeOfPressureVessel",
        "gData_geometryData",
        "gData_code",
        "gData_designPressure",
        "gData_designTemperature",
        "gData_operatingPressure",
        "gData_operatingTemperature",
        "gData_dimmension",
        "gData_vesselVolume",
        "gData_support",
        "gData_jointEfficiency",
        "gData_corrosionAllowance",
        "gData_yearBuilt",
        "gData_material",
        "gData_lastInspection",
        "gData_shellTagNumber",
        "gData_shellService",
        "gData_shellCode",
        "gData_shellDesignPressure",
        "gData_shellDesignTemperature",
        "gData_shellOuterDiameter",
        "gData_shellMaterial",
        "gData_shellAllowableStress",
        "gData_shellEfficiency",
        "gData_shellCorrosionAllowance",
        "gData_shellMinimumThickness",
        "gData_shellCorrosionRate",
        "gData_headTagNumber",
        "gData_headService",
        "gData_headCode",
        "gData_headDesignPressure",
        "gData_headDesignTemperature",
        "gData_headOuterDiameter",
        "gData_headMaterial",
        "gData_headAllowableStress",
        "gData_headEfficiency",
        "gData_headCorrosionAllowance",
        "gData_headMinimumThickness",
        "gData_headCorrosionRate",
    ];
}
