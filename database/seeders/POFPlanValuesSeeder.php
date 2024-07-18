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
                "rbiValue_id" => "rndExcor01",
                "rbiValue_componentId" => "rndComp01",
                "rbiValue_FMS" => 1,
                "rbiValue_failureFrequency" => "genericFailure1020",
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "rndExcor02",
                "rbiValue_componentId" => "rndComp02",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "rndExcor03",
                "rbiValue_componentId" => "rndComp03",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "rndExcor04",
                "rbiValue_componentId" => "rndComp04",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon  ::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
