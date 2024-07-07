<?php

namespace Database\Seeders;

use App\Models\GeneralData;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class GeneralDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_data')->insert(
            [
                "gData_id" => Str::random(9),
                "gData_componentId" => "rndComp01",
                "gData_tagNumber" => "TDA-NON-216 (V-300)",
                "gData_service" => "FWKO Separator",
                "gData_manufacturedBy" => "PT. Gunanusa Utama Fabricators",
                "gData_positionType" => "Horizontal",
                "gData_shapeType" => "Drum",
                "gData_geometryData" => "Ellipsoidal",
                "gData_code" => "ASME Section VIII Division 1",
                "gData_designPressure" => 93.4,
                "gData_designTemperature" => 2.41,
                "gData_operatingPressure" => 54.5,
                "gData_operatingTemperature" => 55.5,
                "gData_dimensionLength" => 2743,
                "gData_dimensionWidth" => 7620,
                "gData_vesselVolumeLB" => 1776,
                "gData_vesselVolumeKG" => 28448,
                "gData_support" => "Saddle",
                "gData_jointEfficiency" => 0.6,
                "gData_yieldStrength" => 0.6,
                "gData_tensileStrength" => 0.6,
                "gData_corrosionAllowanceMM" => 1.58,
                "gData_corrosionAllowanceInch" => 0.062,
                "gData_yearBuilt" => 1987,
                "gData_material" => "SA 516 Grade 70 (Carbon steel)",
                "gData_lastInspection" => "2024-01-01",
                "gData_outerDiameterMM" => 2743.4,
                "gData_outerDiameterInch" => 108.0,
                "gData_allowableStressPsig" => 17500.0,
                "gData_allowableStressBar" => 1206.5,
                "gData_allowableStressKpa" => 1206.58,
                "gData_efficiency" => 1,
                "gData_shellCode" => "AASME Section VIII Division 1",
                "gData_shellMinimumThicknessMM" => 15.8,
                "gData_shellMinimumThicknessInch" => 0.622,
                "gData_shellCorrosionRateMM" => 0.0057,
                "gData_shellCorrosionRateInch" => 0.0002,
                "gData_shellTreqInch" => 0.0002,
                "gData_shellTreqMM" => 0.0002,
                "gData_shellMAWP" => 0.0002,
                "gData_headCode" => "ASME Section VIII Division 1",
                "gData_headMinimumThicknessMM" => 18.4,
                "gData_headMinimumThicknessInch" => 0.7224,
                "gData_headCorrosionRateMM" => 0.006,
                "gData_headCorrosionRateInch" => 0.0002,
                "gData_headTreqInch" => 0.0002,
                "gData_headTreqMM" => 0.0002,
                "gData_headMAWP" => 0.0002,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );
    }
}
