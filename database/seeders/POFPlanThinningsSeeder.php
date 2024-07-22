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
                "planThinning_id" => "planThinning01",
                "planThinning_componentId" => "rndComp01",
                "planThinning_corrosionRate" => 0.317,
                "planThinning_planDate" => "2029-03-20",
                "planThinning_tMinInch" => 0.5095862,
                "planThinning_tMinMM" => 12.9434896,
                "planThinning_nInspA" => 0,
                "planThinning_nInspB" => 0, 
                "planThinning_nInspC" => 1,
                "planThinning_nInspD" => 0,
                "planThinning_injectionPoints" => 0,
                "planThinning_deadLegs" => 0,
                "planThinning_weldingConstruction" => 0,
                "planThinning_astMaintenance" => 0,
                "planThinning_settlement" => 0,
                "planThinning_onlineMonitoring" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planThinning_id" => "planThinning02",
                "planThinning_componentId" => "rndComp02",
                "planThinning_corrosionRate" => null,
                "planThinning_planDate" => null,
                "planThinning_tMinInch" => null,
                "planThinning_tMinMM" => null,
                "planThinning_nInspA" => null,
                "planThinning_nInspB" => null, 
                "planThinning_nInspC" => null,
                "planThinning_nInspD" => null,
                "planThinning_injectionPoints" => null,
                "planThinning_deadLegs" => null,
                "planThinning_weldingConstruction" => null,
                "planThinning_astMaintenance" => null,
                "planThinning_settlement" => null,
                "planThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planThinning_id" => "planThinning03",
                "planThinning_componentId" => "rndComp03",
                "planThinning_corrosionRate" => null,
                "planThinning_planDate" => null,
                "planThinning_tMinInch" => null,
                "planThinning_tMinMM" => null,
                "planThinning_nInspA" => null,
                "planThinning_nInspB" => null, 
                "planThinning_nInspC" => null,
                "planThinning_nInspD" => null,
                "planThinning_injectionPoints" => null,
                "planThinning_deadLegs" => null,
                "planThinning_weldingConstruction" => null,
                "planThinning_astMaintenance" => null,
                "planThinning_settlement" => null,
                "planThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planThinning_id" => "planThinning04",
                "planThinning_componentId" => "rndComp04",
                "planThinning_corrosionRate" => null,
                "planThinning_planDate" => null,
                "planThinning_tMinInch" => null,
                "planThinning_tMinMM" => null,
                "planThinning_nInspA" => null,
                "planThinning_nInspB" => null, 
                "planThinning_nInspC" => null,
                "planThinning_nInspD" => null,
                "planThinning_injectionPoints" => null,
                "planThinning_deadLegs" => null,
                "planThinning_weldingConstruction" => null,
                "planThinning_astMaintenance" => null,
                "planThinning_settlement" => null,
                "planThinning_onlineMonitoring" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
