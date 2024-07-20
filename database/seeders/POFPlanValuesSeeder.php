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
                "planValue_id" => "rndExcor01",
                "planValue_componentId" => "rndComp01",
                "planValue_FMS" => null,
                "planValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndExcor02",
                "planValue_componentId" => "rndComp02",
                "planValue_FMS" => null,
                "planValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndExcor03",
                "planValue_componentId" => "rndComp03",
                "planValue_FMS" => null,
                "planValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planValue_id" => "rndExcor04",
                "planValue_componentId" => "rndComp04",
                "planValue_FMS" => null,
                "planValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
