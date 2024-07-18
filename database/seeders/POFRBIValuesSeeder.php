<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFRBIValuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_rbi_values')->insert([
            [
                "rbiValue_id" => "pofValue01",
                "rbiValue_componentId" => "rndComp01",
                "rbiValue_FMS" => 1,
                "rbiValue_failureFrequency" => "genericFailure1020",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "pofValue02",
                "rbiValue_componentId" => "rndComp02",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "pofValue03",
                "rbiValue_componentId" => "rndComp03",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiValue_id" => "pofValue04",
                "rbiValue_componentId" => "rndComp04",
                "rbiValue_FMS" => null,
                "rbiValue_failureFrequency" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
