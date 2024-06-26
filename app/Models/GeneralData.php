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
        "gData_positionType",
        "gData_shapeType",
        "gData_geometryData",
        "gData_code",
        "gData_designPressure",
        "gData_designTemperature",
        "gData_operatingPressure",
        "gData_operatingTemperature",
        "gData_dimensionLength",
        "gData_dimensionWidth",
        "gData_vesselVolumeLB",
        "gData_vesselVolumeKG",
        "gData_support",
        "gData_jointEfficiency",
        "gData_corrosionAllowanceMM",
        "gData_corrosionAllowanceInch",
        "gData_yearBuilt",
        "gData_material",
        "gData_lastInspection",
        "gData_outerDiameterMM",
        "gData_outerDiameterInch",
        "gData_allowableStressPsig",
        "gData_allowableStressBar",
        "gData_allowableStressKpa",
        "gData_efficiency",
        "gData_shellCode",
        "gData_shellMinimumThicknessMM",
        "gData_shellMinimumThicknessInch",
        "gData_shellCorrosionRateMM",
        "gData_shellCorrosionRateInch",
        "gData_headCode",
        "gData_headMinimumThicknessMM",
        "gData_headMinimumThicknessInch",
        "gData_headCorrosionRateMM",
        "gData_headCorrosionRateInch",
    ];
}
