<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            [
                "tagOfEquipment" => "Left Main Engine",
                "nameOfEquipment" => "Main Engine 1",
                "equipmentType" => "FWKO Separator",
                "itemId" => 1,
                "created_at" => Carbon::now()
            ],
            [
                "tagOfEquipment" => "Right Main Engine",
                "nameOfEquipment" => "Main Engine 2",
                "equipmentType" => "FWKO Separator",
                "itemId" => 1,
                "created_at" => Carbon::now()
            ]
        ]);
    }
}
