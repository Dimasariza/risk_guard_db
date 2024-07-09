<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFRBIExCorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_rbi_ex_cors')->insert([
            [
                "rbiExCor_id" => "rndExcor01",
                "rbiExCor_componentId" => "rndComp01",
                "rbiExCor_equationDesign" => 0.1,
                "rbiExCor_interface" => 0.1,
                "rbiExCor_tMinMM" => 0.1,
                "rbiExCor_tMinInch" => 0.1,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
