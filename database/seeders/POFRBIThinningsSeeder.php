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
        ]);
    }
}
