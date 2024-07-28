<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFRBISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_rbis')->insert([
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
            "rbi_confidenceFactor" => "factor001",
            "rbi_eventFreqFire" => "eventfreq001",
            "rbi_eventFreqOverFilling" => "eventfreq013",
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
