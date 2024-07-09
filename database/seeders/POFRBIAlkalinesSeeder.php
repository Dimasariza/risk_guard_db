<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFRBIAlkalinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_rbi_alkalines')->insert([
            [
                "rbiAlkaline_id" => "rndAlkaline01",
                "rbiAlkaline_componentId" => "rndComp01",
                "rbiAlkaline_ph" => 3.5, 
                "rbiAlkaline_co3Consentration" => 1.0,
                "rbiAlkaline_dfacscc" => 1.0,
                "rbiAlkaline_shellPwht" => true,
                "rbiAlkaline_headPwht" => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
