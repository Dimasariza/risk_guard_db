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
                "rbiThinning_id" => "pofRbiThinning04",
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
