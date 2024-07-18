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
                "rbiAlkaline_id" => "rndAlkaline01",
                "rbiAlkaline_componentId" => "rndComp01",
                "rbiAlkaline_ph" => 3.7, 
                "rbiAlkaline_inspection" => "inspection001",
                "rbiAlkaline_numOfInspection" => 1, 
                "rbiAlkaline_co3Consentration" => 500571.2,
                "rbiAlkaline_dfacscc" => 1,
                "rbiAlkaline_shellPwht" => true,
                "rbiAlkaline_headPwht" => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiAlkaline_id" => "rndAlkaline02",
                "rbiAlkaline_componentId" => "rndComp02",
                "rbiAlkaline_ph" => null, 
                "rbiAlkaline_inspection" => null,
                "rbiAlkaline_numOfInspection" => null, 
                "rbiAlkaline_co3Consentration" =>null,
                "rbiAlkaline_dfacscc" =>null,
                "rbiAlkaline_shellPwht" =>null,
                "rbiAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiAlkaline_id" => "rndAlkaline03",
                "rbiAlkaline_componentId" => "rndComp03",
                "rbiAlkaline_ph" => null, 
                "rbiAlkaline_inspection" => null,
                "rbiAlkaline_numOfInspection" => null, 
                "rbiAlkaline_co3Consentration" =>null,
                "rbiAlkaline_dfacscc" =>null,
                "rbiAlkaline_shellPwht" =>null,
                "rbiAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiAlkaline_id" => "rndAlkaline04",
                "rbiAlkaline_componentId" => "rndComp04",
                "rbiAlkaline_ph" => null, 
                "rbiAlkaline_inspection" => null,
                "rbiAlkaline_numOfInspection" => null, 
                "rbiAlkaline_co3Consentration" =>null,
                "rbiAlkaline_dfacscc" =>null,
                "rbiAlkaline_shellPwht" =>null,
                "rbiAlkaline_headPwht" =>null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);

    }
}
