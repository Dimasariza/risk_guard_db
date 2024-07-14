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
                "item_id" => "rndItem01",
                "item_tagOfItem" => "Marine Tech Industri",
                "item_nameOfItem" => "PT X",
                "item_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "item_id" => "rndItem02",
                "item_tagOfItem" => "Asset Management and Realibility",
                "item_nameOfItem" => "PT ITS Risk Guardian",
                "item_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
