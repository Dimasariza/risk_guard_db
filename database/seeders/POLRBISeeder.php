<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POLRBISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pol_r_b_i_s')->insert([
            "rbi_id" => "rndRBI001",
            "rbi_componentId" => "rndComp02",
            "rbi_fluidService" => null,
            "rbi_typicalTempF" => null,
            "rbi_designType" => null,
            "rbi_discharge" => null,
            "rbi_adjusmentFactor" => null,
            "rbi_serviceSeverity" => null,
            "rbi_envAdjusmentFactor" => null,
            "rbi_inspEffectiveness" => null,
            "rbi_confidenceFactor" => null,
            "rbi_eventFreqFire" => null,
            "rbi_eventFreqOverFilling" => null,
            "rbi_protectedEquipment" => null,
            "rbi_failureFrequency" => null,
            "rbi_damageFactor" => null,
            "rbi_rbiDate" => null,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
