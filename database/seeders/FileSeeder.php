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
                "file_id" => "fotoDimas",
                "file_name" => "1720851342_Foto Dimas.png",
                "file_path" => "/profile/1720851342_Foto Dimas.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "fotoAAR",
                "file_name" => "1720851480_AAR.png",
                "file_path" => "/profile/1720851480_AAR.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "file_id" => "fotoHesti",
                "file_name" => "1720851526_Hesti.png",
                "file_path" => "/profile/1720851526_Hesti.png",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],            
            [
                "file_id" => "fotoAmirta",
                "file_name" => "1720851548_Amirta Mega.png",
                "file_path" => "/profile/1720851548_Amirta Mega.png",
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
