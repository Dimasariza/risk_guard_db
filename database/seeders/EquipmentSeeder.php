<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            [
                "eq_id" => "rndEq01",
                "eq_tagOfEquipment" => "Section 01",
                "eq_nameOfEquipment" => "Oil Processing",
                "eq_equipmentType" => "FWKO Separator",
                "eq_itemId" => "rndItem01",
                "eq_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "eq_id" => "rndEq02",
                "eq_tagOfEquipment" => "Section 02",
                "eq_nameOfEquipment" => "Oil Processing",
                "eq_equipmentType" => "FWKO Separator",
                "eq_itemId" => "rndItem02",
                "eq_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
