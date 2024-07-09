<?php

namespace App\DTO\RBIThinningScreeningQuestion;

use App\Http\Requests\RBIThinningScreeningQuestion\CreateRBISQRequest;
use Illuminate\Support\Str;

class InsertRBISQDTO
{
    public function __construct(
        public readonly string $rbiSQ_componentId,
        public readonly ?bool $rbiSQ_HCLContain = false,
        public readonly ?bool $rbiSQ_HCLIsFreeWater = false,
        public readonly ?bool $rbiSQ_HCLphUnder7 = false,
        public readonly ?bool $rbiSQ_SulfidicContainOil = false,
        public readonly ?bool $rbiSQ_SulfidicTempOver204 = false,
        public readonly ?bool $rbiSQ_SulfuricContainH2SO4 = false,
        public readonly ?bool $rbiSQ_H2SH2containH2s = false,
        public readonly ?bool $rbiSQ_H2SH2TempOver204 = false,
        public readonly ?bool $rbiSQ_HydrifluoricContainHF = false,
        public readonly ?bool $rbiSQ_SourWaterIsFreeH2S = false,
        public readonly ?bool $rbiSQ_AmineIsEquipment = false,
        public readonly ?bool $rbiSQ_OxidationTempOver482 = false,
        public readonly ?bool $rbiSQ_OxidationOxigenPresent = false,
        public readonly ?bool $rbiSQ_AcidphUnder7 = false,
        public readonly ?bool $rbiSQ_AcidContainPPM = false,
        public readonly ?bool $rbiSQ_CoolingIsEquipment = false,
        public readonly ?bool $rbiSQ_SoilSideIsEquipment = false,
        public readonly ?bool $rbiSQ_SoilSideIsMaterial = false,
        public readonly ?bool $rbiSQ_CO2IsFreeWater = false,
        public readonly ?bool $rbiSQ_CO2IsMaterial = false,
        public readonly ?bool $rbiSQ_ASTIsEquipment = false,
        public readonly ?string $rbiSQ_notesHCLphUnder7 = null,
        public readonly ?string $rbiSQ_notessulfidicTempOver204 = null,
        public readonly ?string $rbiSQ_notesH2SH2 = null,
        public readonly ?string $rbiSQ_notesOxidatoin = null,
        public readonly ?string $rbiSQ_notesAcid = null,
        public readonly ?string $rbiSQ_notesCO2 = null,
    ) {
    }

    public static function fromRequest(CreateRBISQRequest $request): self
    {
        return new self(
            rbiSQ_componentId: $request->validated("rbiSQ_componentId")
        );
    }

    public function build(): array
    {
        return [
            "rbiSQ_id" => Str::random(9),
            "rbiSQ_componentId" => $this->rbiSQ_componentId,
            "rbiSQ_HCLContain" => $this->rbiSQ_HCLContain,
            "rbiSQ_HCLIsFreeWater" => $this->rbiSQ_HCLIsFreeWater,
            "rbiSQ_HCLphUnder7" => $this->rbiSQ_HCLphUnder7,
            "rbiSQ_SulfidicContainOil" => $this->rbiSQ_SulfidicContainOil,
            "rbiSQ_SulfidicTempOver204" => $this->rbiSQ_SulfidicTempOver204,
            "rbiSQ_SulfuricContainH2SO4" => $this->rbiSQ_SulfuricContainH2SO4,
            "rbiSQ_H2SH2containH2s" => $this->rbiSQ_H2SH2containH2s,
            "rbiSQ_H2SH2TempOver204" => $this->rbiSQ_H2SH2TempOver204,
            "rbiSQ_HydrifluoricContainHF" => $this->rbiSQ_HydrifluoricContainHF,
            "rbiSQ_SourWaterIsFreeH2S" => $this->rbiSQ_SourWaterIsFreeH2S,
            "rbiSQ_AmineIsEquipment" => $this->rbiSQ_AmineIsEquipment,
            "rbiSQ_OxidationTempOver482" => $this->rbiSQ_OxidationTempOver482,
            "rbiSQ_OxidationOxigenPresent" => $this->rbiSQ_OxidationOxigenPresent,
            "rbiSQ_AcidphUnder7" => $this->rbiSQ_AcidphUnder7,
            "rbiSQ_AcidContainPPM" => $this->rbiSQ_AcidContainPPM,
            "rbiSQ_CoolingIsEquipment" => $this->rbiSQ_CoolingIsEquipment,
            "rbiSQ_SoilSideIsEquipment" => $this->rbiSQ_SoilSideIsEquipment,
            "rbiSQ_SoilSideIsMaterial" => $this->rbiSQ_SoilSideIsMaterial,
            "rbiSQ_CO2IsFreeWater" => $this->rbiSQ_CO2IsFreeWater,
            "rbiSQ_CO2IsMaterial" => $this->rbiSQ_CO2IsMaterial,
            "rbiSQ_ASTIsEquipment" => $this->rbiSQ_ASTIsEquipment,
            "rbiSQ_notesHCLphUnder7" => $this->rbiSQ_notesHCLphUnder7,
            "rbiSQ_notessulfidicTempOver204" => $this->rbiSQ_notessulfidicTempOver204,
            "rbiSQ_notesH2SH2" => $this->rbiSQ_notesH2SH2,
            "rbiSQ_notesOxidatoin" => $this->rbiSQ_notesOxidatoin,
            "rbiSQ_notesAcid" => $this->rbiSQ_notesAcid,
            "rbiSQ_notesCO2" => $this->rbiSQ_notesCO2,
        ];
    }
}
