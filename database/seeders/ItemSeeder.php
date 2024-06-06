<?php

namespace Database\Seeders;

use App\Models\Item;
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
                "tagOfItem" => "Tag of item no 1",
                "nameOfItem" => "Name of item no 1",
                "created_at" => time() . now()
            ],
            [
                "tagOfItem" => "Tag of item no 2",
                "nameOfItem" => "Name of item no 2",
                "created_at" => time() . now()
            ]
        ]);
    }
}
