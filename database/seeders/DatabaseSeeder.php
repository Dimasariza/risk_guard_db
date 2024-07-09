<?php

namespace Database\Seeders;

use App\Models\pof_rbi_thinning;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ItemSeeder::class,
            EquipmentSeeder::class,
            ComponentSeeder::class,
            GeneralDataSeeder::class,
            UserSeeder::class,
            DamageMechanismSeeder::class,
            POFRBIThinningsSeeder::class,
            POFRBIExCorsSeeder::class,
            POFRBIAlkalinesSeeder::class,
            // POFRBIValuesSeeder::class,
            // POFPlanThinningsSeeder::class,
            // POFPlanExCorsSeeder::class,
            // POFPlanAlkalinesSeeder::class,
            // POFPlanValuesSeeder::class
        ]);
    }
}
