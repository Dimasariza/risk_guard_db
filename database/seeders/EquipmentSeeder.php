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
                "eq_id" => Str::random(9),
                "eq_tagOfEquipment" => "Left Main Engine",
                "eq_nameOfEquipment" => "Main Engine 1",
                "eq_equipmentType" => "FWKO Separator",
                "eq_itemId" => "1",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "eq_id" => Str::random(9),
                "eq_tagOfEquipment" => "Right Main Engine",
                "eq_nameOfEquipment" => "Main Engine 2",
                "eq_equipmentType" => "FWKO Separator",
                "eq_itemId" => "1",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
