<?php

namespace Database\Seeders;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                "tagOfItem" => "MV Maratha Surabaya",
                "nameOfItem" => "MV Maratha",
                "created_at" => Carbon::now()
            ],
            [
                "tagOfItem" => "MV Bung Tomo Jakarta",
                "nameOfItem" => "MV Bung Tomo",
                "created_at" => Carbon::now()
            ]
        ]);
    }
}
