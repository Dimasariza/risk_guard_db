<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class POFPlanExCorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pof_plan_ex_cors')->insert([
            [
                "planExCor_id" => "rndExcor01",
                "planExCor_componentId" => "rndComp01",
                "planExCor_equationDesign" => 2,
                "planExCor_interface" => 1,
                "planExCor_tMinMM" => 12.883,
                "planExCor_tMinInch" => 0.50719,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planExCor_id" => "rndExcor02",
                "planExCor_componentId" => "rndComp02",
                "planExCor_equationDesign" => null,
                "planExCor_interface" => null,
                "planExCor_tMinMM" => null,
                "planExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planExCor_id" => "rndExcor03",
                "planExCor_componentId" => "rndComp03",
                "planExCor_equationDesign" => null,
                "planExCor_interface" => null,
                "planExCor_tMinMM" => null,
                "planExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "planExCor_id" => "rndExcor04",
                "planExCor_componentId" => "rndComp04",
                "planExCor_equationDesign" => null,
                "planExCor_interface" => null,
                "planExCor_tMinMM" => null,
                "planExCor_tMinInch" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
