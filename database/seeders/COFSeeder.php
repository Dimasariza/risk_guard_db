<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

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
                "cof_releaseHoleSizeD4" => 16,
                "cof_liquidInventories" => "inventories1001",
                "cof_detectionSystem" => "detection1001",
                "cof_isolationSystem" => "isolation1001",
                "cof_flamableCons" => "flamable001",
                "cof_damageCons" => "damage001",
                "cof_adjToFlamable" => "mitigation1001",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cof_componentId" => "rndComp02",
                "cof_massComponent" => null,
                "cof_massInventory" => null,
                "cof_representativeFluid" => null,
                "cof_phaseOfFluid" => null,
                "cof_releaseHoleSizeD1" => 6.4,
                "cof_releaseHoleSizeD2" => 25,
                "cof_releaseHoleSizeD3" => 102,
                "cof_releaseHoleSizeD4" => 16,
                "cof_liquidInventories" => null,
                "cof_detectionSystem" => null,
                "cof_isolationSystem" => null,
                "cof_flamableCons" => null,
                "cof_damageCons" => null,
                "cof_adjToFlamable" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cof_componentId" => "rndComp03",
                "cof_massComponent" => null,
                "cof_massInventory" => null,
                "cof_representativeFluid" => null,
                "cof_phaseOfFluid" => null,
                "cof_releaseHoleSizeD1" => 6.4,
                "cof_releaseHoleSizeD2" => 25,
                "cof_releaseHoleSizeD3" => 102,
                "cof_releaseHoleSizeD4" => 16,
                "cof_liquidInventories" => null,
                "cof_detectionSystem" => null,
                "cof_isolationSystem" => null,
                "cof_flamableCons" => null,
                "cof_damageCons" => null,
                "cof_adjToFlamable" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "cof_componentId" => "rndComp04",
                "cof_massComponent" => null,
                "cof_massInventory" => null,
                "cof_representativeFluid" => null,
                "cof_phaseOfFluid" => null,
                "cof_releaseHoleSizeD1" => 6.4,
                "cof_releaseHoleSizeD2" => 25,
                "cof_releaseHoleSizeD3" => 102,
                "cof_releaseHoleSizeD4" => 16,
                "cof_liquidInventories" => null,
                "cof_detectionSystem" => null,
                "cof_isolationSystem" => null,
                "cof_flamableCons" => null,
                "cof_damageCons" => null,
                "cof_adjToFlamable" => null,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ]);
    }
}
