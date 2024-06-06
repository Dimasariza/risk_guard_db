<?php

namespace Database\Seeders;

use App\Models\Component;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipment')->insert([
            [
                "tagOfComponent" => "Oil Filter",
                "nameOfComponent" => "Caterpillar Oil Filter Machine",
                "componentType" => "Filter",
                "equipmentId" => 1,
                "created_at" => Carbon::now()
            ],
            [
                "tagOfComponent" => "Right Main Engine",
                "nameOfComponent" => "Main Engine 2",
                "componentType" => "Filter",
                "equipmentId" => 2,
                "created_at" => Carbon::now()
            ]
        ]);
    }
}
