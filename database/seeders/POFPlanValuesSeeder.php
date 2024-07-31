<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFPlanValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_plan_values')->insert([
            [
                "planValue_id" => "rndValue01",
                "planValue_componentId" => "rndComp01",
                "planValue_FMS" => 1,
                "planValue_failureFrequency" => "genericFailure1020",
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndValue02",
                "planValue_componentId" => "rndComp02",
                "planValue_FMS" => null,
                "planValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndValue03",
                "planValue_componentId" => "rndComp03",
                "planValue_FMS" => 1,
                "planValue_failureFrequency" => "genericFailure1019",
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndValue04",
                "planValue_componentId" => "rndComp04",
                "planValue_FMS" => 1,
                "planValue_failureFrequency" => "genericFailure1010",
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
