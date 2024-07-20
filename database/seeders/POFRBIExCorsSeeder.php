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
                "rbiExCor_equationDesign" => null,
                "rbiExCor_interface" => null,
                "rbiExCor_tMinMM" => null,
                "rbiExCor_tMinInch" => null,
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
                "rbiExCor_equationDesign" => null,
                "rbiExCor_interface" => null,
                "rbiExCor_tMinMM" => null,
                "rbiExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "rbiExCor_id" => "rndExcor04",
                "rbiExCor_componentId" => "rndComp04",
                "rbiExCor_equationDesign" => null,
                "rbiExCor_interface" => null,
                "rbiExCor_tMinMM" => null,
                "rbiExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
