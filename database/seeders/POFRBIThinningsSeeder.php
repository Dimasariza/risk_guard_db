<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFRBIThinningsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("pof_rbi_thinnings")->insert([
            [
                "rbiThinning_id" => "pofRbiThinning01",
                "rbiThinning_componentId" => "rndComp01",
                "rbiThinning_corrosionRate" => 0.317,
                "rbiThinning_rbiDate" => "2024-03-20",
                "rbiThinning_tMinInch" => 0.5095862,
                "rbiThinning_tMinMM" => 12.9434896,
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
                "rbiThinning_id" => "pofRbiThinning02",
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
                "rbiThinning_id" => "pofRbiThinning03",
                "rbiThinning_componentId" => "rndComp03",
                "rbiThinning_corrosionRate" => 0.03823529,
                "rbiThinning_rbiDate" => "2024-04-15",
                "rbiThinning_tMinInch" => 0.3307,
                "rbiThinning_tMinMM" => 8.4,
                "rbiThinning_nInspA" => 0,
                "rbiThinning_nInspB" => 1,
                "rbiThinning_nInspC" => 0,
                "rbiThinning_nInspD" => 0,
                "rbiThinning_injectionPoints" => 1,
                "rbiThinning_deadLegs" => 1,
                "rbiThinning_weldingConstruction" => 1,
                "rbiThinning_astMaintenance" => 1,
                "rbiThinning_settlement" => 1,
                "rbiThinning_onlineMonitoring" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiThinning_id" => "pofRbiThinning04",
                "rbiThinning_componentId" => "rndComp04",
                "rbiThinning_corrosionRate" => 0.046046511,
                "rbiThinning_rbiDate" => "2024-04-14",
                "rbiThinning_tMinInch" => 0.05,
                "rbiThinning_tMinMM" => 1.27,
                "rbiThinning_nInspA" => 0,
                "rbiThinning_nInspB" => 1,
                "rbiThinning_nInspC" => 0,
                "rbiThinning_nInspD" => 0,
                "rbiThinning_injectionPoints" => 1,
                "rbiThinning_deadLegs" => 1,
                "rbiThinning_weldingConstruction" => 0,
                "rbiThinning_astMaintenance" => 0,
                "rbiThinning_settlement" => 0,
                "rbiThinning_onlineMonitoring" => 1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
