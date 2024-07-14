<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorrosionLoopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('corrosion_loops')->insert([
            [
                "cl_id" => "rndCL001",
                "cl_userId" => "rndmUser01",
                "cl_name" => "Corrosion loop admin",
                "cl_fileId" => "corLoop001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cl_id" => "rndCL002",
                "cl_userId" => "rndmUser02",
                "cl_name" => "Corrosion loop dimas",
                "cl_fileId" => "corLoop001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cl_id" => "rndCL003",
                "cl_userId" => "rndmUser03",
                "cl_name" => "Corrosion loop AAR",
                "cl_fileId" => "corLoop001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cl_id" => "rndCL004",
                "cl_userId" => "rndmUser04",
                "cl_name" => "Corrosion loop Hesti",
                "cl_fileId" => "corLoop001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cl_id" => "rndCL005",
                "cl_userId" => "rndmUser05",
                "cl_name" => "Corrosion loop Amirta",
                "cl_fileId" => "corLoop001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
