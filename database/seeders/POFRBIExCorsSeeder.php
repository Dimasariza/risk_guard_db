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
                "rbiExCor_equationDesign" => 2,
                "rbiExCor_interface" => 1,
                "rbiExCor_tMinMM" => 12.883,
                "rbiExCor_tMinInch" => 0.50719,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiExCor_id" => "rndExcor02",
                "rbiExCor_componentId" => "rndComp02",
                "rbiExCor_equationDesign" => null,
                "rbiExCor_interface" => null,
                "rbiExCor_tMinMM" => null,
                "rbiExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiExCor_id" => "rndExcor03",
                "rbiExCor_componentId" => "rndComp03",
                "rbiExCor_equationDesign" => 1,
                "rbiExCor_interface" => 1,
                "rbiExCor_tMinMM" => 8.4,
                "rbiExCor_tMinInch" => 0.3307,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiExCor_id" => "rndExcor04",
                "rbiExCor_componentId" => "rndComp04",
                "rbiExCor_equationDesign" => 2,
                "rbiExCor_interface" => 1,
                "rbiExCor_tMinMM" => 1.274222,
                "rbiExCor_tMinInch" => 0.0502,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
