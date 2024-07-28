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
            "rbi_fluidService" => "Methane",
            "rbi_typicalTempF" => "131",
            "rbi_designType" => "Conventional",
            "rbi_discharge" => "to flare with flare recovery system",
            "rbi_adjusmentFactor" => "adjFactor001",
            "rbi_serviceSeverity" => "severity1001",
            "rbi_envAdjusmentFactor" => "adjEnvirontment001",
            "rbi_inspEffectiveness" => "effectiveness003",
            "rbi_confidenceFactor" => "factor003",
            "rbi_eventFreqFire" => null,
            "rbi_eventFreqOverFilling" => null,
            "rbi_protectedEquipment" => null,
            "rbi_dfValue" => null,
            "rbi_failureFrequency" => "genericFailure1020",
            "rbi_damageFactor" => null,
            "rbi_rbiDate" => "2024-03-20",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
