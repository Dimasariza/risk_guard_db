<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POLPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pol_plans')->insert([
            "plan_id" => "rndPlan001",
            "plan_componentId" => "rndComp02",
            "plan_fluidService" => "methane",
            "plan_typicalTempF" => "131",
            "plan_designType" => "Conventional",
            "plan_discharge" => "to flare with flare recovery system",
            "plan_adjusmentFactor" => "adjFactor001",
            "plan_serviceSeverity" => "severity1001",
            "plan_envAdjusmentFactor" => "adjEnvirontment001",
            "plan_inspEffectiveness" => "effectiveness003",
            "plan_confidenceFactor" => "factor003",
            "plan_eventFreqFire" => null,
            "plan_eventFreqOverFilling" => null,
            "plan_protectedEquipment" => null,
            "plan_dfValue" => null,
            "plan_failureFrequency" => "genericFailure1020",
            "plan_damageFactor" => null,
            "plan_planDate" => "2027-03-20",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
