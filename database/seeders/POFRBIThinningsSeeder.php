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
            "rbiThinning_id" => "rndComp02",
            "rbiThinning_componentId" => "rndComp01",
            "rbiThinning_corrosionRate" => 0.1,
            "rbiThinning_rbiDate" => "2024-01-01",
            "rbiThinning_tMinInch" => 0.1,
            "rbiThinning_tMinMM" => 0.1,
            "rbiThinning_nInspA" => 0.1,
            "rbiThinning_nInspB" => 0.1,   
            "rbiThinning_nInspC" => 0.1,
            "rbiThinning_nInspD" => 0.1,
            "rbiThinning_injectionPoints" => 0.1,
            "rbiThinning_deadLegs" => 0.1,
            "rbiThinning_weldingConstruction" => 0.1,
            "rbiThinning_astMaintenance" => 0.1,
            "rbiThinning_settlement" => 0.1,
            "rbiThinning_onlineMonitoring" => 0.1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
