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
                "comp_tagOfComponent" => "Oil Filter",
                "comp_nameOfComponent" => "Caterpillar Oil Filter Machine",
                "comp_componentType" => "Filter",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "comp_id" => "rndComp02",
                "comp_tagOfComponent" => "Main Air Filter",
                "comp_nameOfComponent" => "Mitsubishi Air Filter",
                "comp_componentType" => "Filter",
                "comp_equipmentId" => "rndEq01",
                "comp_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
