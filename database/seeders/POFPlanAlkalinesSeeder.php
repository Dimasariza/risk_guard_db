<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFPlanAlkalinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_plan_alkalines')->insert([
            [
                "planAlkaline_id" => "rndAlkaline01",
                "planAlkaline_componentId" => "rndComp01",
                "planAlkaline_ph" => null, 
                "planAlkaline_inspection" => null,
                "planAlkaline_numOfInspection" => null, 
                "planAlkaline_co3Consentration" => null,
                "planAlkaline_dfacscc" => null,
                "planAlkaline_shellPwht" => null,
                "planAlkaline_headPwht" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planAlkaline_id" => "rndAlkaline02",
                "planAlkaline_componentId" => "rndComp02",
                "planAlkaline_ph" => null, 
                "planAlkaline_inspection" => null,
                "planAlkaline_numOfInspection" => null, 
                "planAlkaline_co3Consentration" =>null,
                "planAlkaline_dfacscc" =>null,
                "planAlkaline_shellPwht" =>null,
                "planAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planAlkaline_id" => "rndAlkaline03",
                "planAlkaline_componentId" => "rndComp03",
                "planAlkaline_ph" => null, 
                "planAlkaline_inspection" => null,
                "planAlkaline_numOfInspection" => null, 
                "planAlkaline_co3Consentration" =>null,
                "planAlkaline_dfacscc" =>null,
                "planAlkaline_shellPwht" =>null,
                "planAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planAlkaline_id" => "rndAlkaline04",
                "planAlkaline_componentId" => "rndComp04",
                "planAlkaline_ph" => null, 
                "planAlkaline_inspection" => null,
                "planAlkaline_numOfInspection" => null, 
                "planAlkaline_co3Consentration" =>null,
                "planAlkaline_dfacscc" =>null,
                "planAlkaline_shellPwht" =>null,
                "planAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);

    }
}
