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
        ]);

    }
}
