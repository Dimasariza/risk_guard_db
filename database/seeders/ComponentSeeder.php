<?php

namespace Database\Seeders;

use App\Models\Component;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('component')->insert([
            [
                "comp_id" => "rndComp01",
                "comp_tagOfComponent" => "Area 01",
                "comp_nameOfComponent" => "PV JNE MAM 106",
                "comp_componentType" => "Pressure Vessel",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser05",
                "comp_addToCalculation" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "comp_id" => "rndComp02",
                "comp_tagOfComponent" => "Area 02",
                "comp_nameOfComponent" => "PRD XHR EXY 11",
                "comp_componentType" => "Pressure Relief Device",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser04",
                "comp_addToCalculation" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "comp_id" => "rndComp03",
                "comp_tagOfComponent" => "Area 03",
                "comp_nameOfComponent" => "Tank INK XXZ 001",
                "comp_componentType" => "Tank",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser03",
                "comp_addToCalculation" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "comp_id" => "rndComp04",
                "comp_tagOfComponent" => "Area 04",
                "comp_nameOfComponent" => "Pipe TDE XXY 110",
                "comp_componentType" => "Pipe",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser03",
                "comp_addToCalculation" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
