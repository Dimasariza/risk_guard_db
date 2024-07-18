<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFPlanThinningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("pof_plan_thinnings")->insert([
            [
                "rbiThinning_id" => "rbiThinning01",
                "rbiThinning_componentId" => "rndComp01",
                "rbiThinning_corrosionRate" => 0.3172,
                "rbiThinning_rbiDate" => "2024-01-01",
                "rbiThinning_tMinInch" => 0.5096,
                "rbiThinning_tMinMM" => 12.943,
                "rbiThinning_nInspA" => 0,
                "rbiThinning_nInspB" => 0,   
                "rbiThinning_nInspC" => 1,
                "rbiThinning_nInspD" => 0,
                "rbiThinning_injectionPoints" => 0,
                "rbiThinning_deadLegs" => 0,
                "rbiThinning_weldingConstruction" => 0,
                "rbiThinning_astMaintenance" => 0,
                "rbiThinning_settlement" => 0,
                "rbiThinning_onlineMonitoring" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiThinning_id" => "rbiThinning02",
                "rbiThinning_componentId" => "rndComp02",
                "rbiThinning_corrosionRate" => null,
                "rbiThinning_rbiDate" => null,
                "rbiThinning_tMinInch" => null,
                "rbiThinning_tMinMM" => null,
                "rbiThinning_nInspA" => null,
                "rbiThinning_nInspB" => null, 
                "rbiThinning_nInspC" => null,
                "rbiThinning_nInspD" => null,
                "rbiThinning_injectionPoints" => null,
                "rbiThinning_deadLegs" => null,
                "rbiThinning_weldingConstruction" => null,
                "rbiThinning_astMaintenance" => null,
                "rbiThinning_settlement" => null,
                "rbiThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiThinning_id" => "rbiThinning03",
                "rbiThinning_componentId" => "rndComp03",
                "rbiThinning_corrosionRate" => null,
                "rbiThinning_rbiDate" => null,
                "rbiThinning_tMinInch" => null,
                "rbiThinning_tMinMM" => null,
                "rbiThinning_nInspA" => null,
                "rbiThinning_nInspB" => null, 
                "rbiThinning_nInspC" => null,
                "rbiThinning_nInspD" => null,
                "rbiThinning_injectionPoints" => null,
                "rbiThinning_deadLegs" => null,
                "rbiThinning_weldingConstruction" => null,
                "rbiThinning_astMaintenance" => null,
                "rbiThinning_settlement" => null,
                "rbiThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiThinning_id" => "rbiThinning04",
                "rbiThinning_componentId" => "rndComp04",
                "rbiThinning_corrosionRate" => null,
                "rbiThinning_rbiDate" => null,
                "rbiThinning_tMinInch" => null,
                "rbiThinning_tMinMM" => null,
                "rbiThinning_nInspA" => null,
                "rbiThinning_nInspB" => null, 
                "rbiThinning_nInspC" => null,
                "rbiThinning_nInspD" => null,
                "rbiThinning_injectionPoints" => null,
                "rbiThinning_deadLegs" => null,
                "rbiThinning_weldingConstruction" => null,
                "rbiThinning_astMaintenance" => null,
                "rbiThinning_settlement" => null,
                "rbiThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
