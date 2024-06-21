<?php

namespace Database\Seeders;

use App\Models\GeneralData;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_data')->insert(
            [
                "gData_tagNumber" => "JNE-MAM-106 (V-300)",
                "gData_service" => "FWKO Separator",
                "gData_manufacturedBy" => "PT. Gunanusa Utama Fabricators",
                "gData_typeOfPressureVessel" => "Horizontal",
                "gData_geometryData" => "Ellipsoidal",
                "gData_code" => "ASME Section VIII Division 1",
                "gData_designPressure" => 3.01,
                "gData_designTemperature" => 3.01,
                "gData_operatingPressure" => 2.41,
                "gData_operatingTemperature" => 54.5,
                "gData_dimmension" => "2743 (OD) x 7620 S/S",
                "gData_vesselVolume" => 1776,
                "gData_support" => "Saddle",
                "gData_jointEfficiency" => 1,
                "gData_corrosionAllowance" => 1.58,
                "gData_yearBuilt" => 1987,
                "gData_material" => "SA 516 Grade 70",
                "gData_lastInspection" => "",
                "gData_shellTagNumber" => "JNE-MAM-106 (V-300)",
                "gData_shellService" => "FWKO Separator",
                "gData_shellCode" => "ASME Section VIII Division 1",
                "gData_shellDesignPressure" => 93.4,
                "gData_shellDesignTemperature" => 93.4,
                "gData_shellOuterDiameter" => 2743,
                "gData_shellMaterial" => "SA 516 Grade 70 (Carbon steel)",
                "gData_shellAllowableStress" => 17500,
                "gData_shellEfficiency" => 1,
                "gData_shellCorrosionAllowance" => 1.58,
                "gData_shellMinimumThickness" => 15.8,
                "gData_shellCorrosionRate" => 0.0057,
                "gData_headTagNumber" => "JNE-MAM-106 (V-300)",
                "gData_headService" => "FWKO Separator",
                "gData_headCode" => "ASME Section VIII Division 1",
                "gData_headDesignPressure" => 3.01,
                "gData_headDesignTemperature" => 93.4,
                "gData_headOuterDiameter" => 2743,
                "gData_headMaterial" => "SA 516 Grade 70 (Carbon steel)",
                "gData_headAllowableStress" => 17500,
                "gData_headEfficiency" => 1,
                "gData_headCorrosionAllowance" => 1.58,
                "gData_headMinimumThickness" => 18.40,
                "gData_headCorrosionRate" => 0.006,
                "created_at" => Carbon::now()
            ]
        );
    }
}
