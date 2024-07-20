<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->insert([
            [
                "file_id" => "dwi",
                "file_name" => "Pak DP.png",
                "file_path" => "/profile/Pak DP.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "nurhadi",
                "file_name" => "Pak Nur.png",
                "file_path" => "/profile/Pak Nur.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "dimas",
                "file_name" => "Dimas.png",
                "file_path" => "/profile/Dimas.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "aar",
                "file_name" => "AAR.png",
                "file_path" => "/profile/AAR.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "hesti",
                "file_name" => "1720851526_Hesti.png",
                "file_path" => "/profile/Hesti.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],            
            [
                "file_id" => "amirta",
                "file_name" => "Amirta Mega.png",
                "file_path" => "/profile/Amirta Mega.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "corLoop001",
                "file_name" => "1720855144_corrosion loop example 1.jpg",
                "file_path" => "/file/1720855144_corrosion loop example 1.jpg",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
