<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                "item_id" => Str::random(9),
                "item_tagOfItem" => "MV Maratha Surabaya",
                "item_nameOfItem" => "MV Maratha",
                "created_at" => Carbon::now()
            ],
            [
                "item_id" => Str::random(9),
                "item_tagOfItem" => "MV Bung Tomo Jakarta",
                "item_nameOfItem" => "MV Bung Tomo",
                "created_at" => Carbon::now()
            ]
        ]);
    }
}
