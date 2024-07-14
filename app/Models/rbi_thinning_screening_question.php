<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rbi_thinning_screening_question extends Model
{
    use HasFactory;
        
    protected $fillable = [
        "rbiSQ_id",
        "rbiSQ_componentId",
        "rbiSQ_HCLContain",
        "rbiSQ_HCLIsFreeWater",
        "rbiSQ_HCLphUnder7",
        "rbiSQ_SulfidicContainOil",
        "rbiSQ_SulfidicTempOver204",
        "rbiSQ_SulfuricContainH2SO4",
        "rbiSQ_H2SH2containH2s",
        "rbiSQ_H2SH2TempOver204",
        "rbiSQ_HydrifluoricContainHF",
        "rbiSQ_SourWaterIsFreeH2S",
        "rbiSQ_AmineIsEquipment",
        "rbiSQ_OxidationTempOver482",
        "rbiSQ_OxidationOxigenPresent",
        "rbiSQ_AcidphUnder7",
        "rbiSQ_AcidContainPPM",
        "rbiSQ_CoolingIsEquipment",
        "rbiSQ_SoilSideIsEquipment",
        "rbiSQ_SoilSideIsMaterial",
        "rbiSQ_CO2IsFreeWater",
        "rbiSQ_CO2IsMaterial",
        "rbiSQ_ASTIsEquipment",
        "rbiSQ_notesHCLphUnder7",
        "rbiSQ_notessulfidicTempOver204",
        "rbiSQ_notesH2SH2",
        "rbiSQ_notesOxidatoin",
        "rbiSQ_notesAcid",
        "rbiSQ_notesCO2",
    ];
    protected $casts = [
        "rbiSQ_HCLContain" => "boolean",
        "rbiSQ_HCLIsFreeWater" => "boolean",
        "rbiSQ_HCLphUnder7" => "boolean",
        "rbiSQ_SulfidicContainOil" => "boolean",
        "rbiSQ_SulfidicTempOver204" => "boolean",
        "rbiSQ_SulfuricContainH2SO4" => "boolean",
        "rbiSQ_H2SH2containH2s" => "boolean",
        "rbiSQ_H2SH2TempOver204" => "boolean",
        "rbiSQ_HydrifluoricContainHF" => "boolean",
        "rbiSQ_SourWaterIsFreeH2S" => "boolean",
        "rbiSQ_AmineIsEquipment" => "boolean",
        "rbiSQ_OxidationTempOver482" => "boolean",
        "rbiSQ_OxidationOxigenPresent" => "boolean",
        "rbiSQ_AcidphUnder7" => "boolean",
        "rbiSQ_AcidContainPPM" => "boolean",
        "rbiSQ_CoolingIsEquipment" => "boolean",
        "rbiSQ_SoilSideIsEquipment" => "boolean",
        "rbiSQ_SoilSideIsMaterial" => "boolean",
        "rbiSQ_CO2IsFreeWater" => "boolean",
        "rbiSQ_CO2IsMaterial" => "boolean",
        "rbiSQ_ASTIsEquipment" => "boolean",
    ];
}
