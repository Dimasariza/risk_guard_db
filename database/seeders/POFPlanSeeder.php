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
            "plan_componentId" => "rndComp04",
            "plan_fluidService" => null,
            "plan_typicalTempF" => null,
            "plan_designType" => null,
            "plan_discharge" => null,
            "plan_adjusmentFactor" => null,
            "plan_serviceSeverity" => null,
            "plan_envAdjusmentFactor" => null,
            "plan_inspEffectiveness" => null,
            "plan_confidenceFactor" => null,
            "plan_eventFreqFire" => null,
            "plan_eventFreqOverFilling" => null,
            "plan_protectedEquipment" => null,
            "plan_rbiDate" => null,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

    }
}
