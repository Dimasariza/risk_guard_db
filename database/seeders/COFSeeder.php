<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class COFSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('c_o_f_s')->insert([
            [
                "cof_componentId" => "rndComp01",
                "cof_massComponent" => 3387.807,
                "cof_massInventory" => 8377.41,
                "cof_representativeFluid" => "representativeFluid1",
                "cof_phaseOfFluid" => "phase1001",
                "cof_releaseHoleSizeD1" => 6.4,
                "cof_releaseHoleSizeD2" => 25,
                "cof_releaseHoleSizeD3" => 102,
                "cof_releaseHoleSizeD4" => 406,
                "cof_liquidInventories" => "inventories1001",
                "cof_detectionSystem" => "detection1001",
                "cof_isolationSystem" => "isolation1001",
                "cof_flamableCons" => "flamable001",
                "cof_damageCons" => "damage001",
                "cof_adjToFlamable" => "mitigation1001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
