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
                "item_tagOfItem" => "Jakarta",
                "item_nameOfItem" => "PT ITS Risk Guardian",
                "item_userId" => "rndmUser01",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "item_id" => "rndItem02",
                "item_tagOfItem" => "Jakarta",
                "item_nameOfItem" => "PT X",
                "item_userId" => "rndmUser01",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "item_id" => "rndItem03",
                "item_tagOfItem" => "Surabaya",
                "item_nameOfItem" => "PT A",
                "item_userId" => "rndmUser05",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
