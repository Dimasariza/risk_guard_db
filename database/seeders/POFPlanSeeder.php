<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_plans')->insert([
            "plan_id" => "rndPlan001",
            "plan_componentId" => "rndComp02",
            "plan_fluidService" => "Methane",
            "plan_typicalTempF" => 131,
            "plan_designType" => "Conventional",
            "plan_discharge" => "To flare with flare recovery system",
            "plan_adjusmentFactor" => "adjFactor001",
            "plan_serviceSeverity" => "severity1001",
            "plan_envAdjusmentFactor" => "adjEnvirontment001",
            "plan_inspEffectiveness" => "effectiveness003",
            "plan_confidenceFactor" => "factor001",
            "plan_eventFreqFire" => "eventfreq001",
            "plan_eventFreqOverFilling" => "eventfreq013",
            "plan_protectedEquipment" => null,
            "plan_dfValue" => null,
            "plan_failureFrequency" => "genericFailure1020",
            "plan_damageFactor" => null,
            "plan_planDate" => "2027-03-21",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
