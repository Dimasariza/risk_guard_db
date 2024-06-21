<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "user_id" => Str::random(9),
                "user_firstName" => "Admin",
                "user_lastName" => "Risk Guardian",
                "user_username" => "admin",
                "password" => "admin1234",
                "user_company" => "PT ITS Risk Guardian",
                "user_jobTitle" => "Risk Analysis Engineer",
                "user_phoneNumber" => "08880000",
                "user_address" => "Keputih",
                "user_status" => true,
                "user_email" => "admin@gmail.com",
                "user_emailVerifiedAt" => "2024-01-01",
                "user_remember_token" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "user_id" => Str::random(9),
                "user_firstName" => "Roganda Dimas",
                "user_lastName" => "Ariza",
                "user_username" => "dimas.ariza",
                "password" => "roganda1234",
                "user_company" => "PT ITS Marine",
                "user_jobTitle" => "Software Developer",
                "user_phoneNumber" => "0895421010",
                "user_address" => "Tanjung Perak",
                "user_status" => true,
                "user_email" => "dimas.ariza20@gmail.com",
                "user_emailVerifiedAt" => "2024-01-01",
                "user_remember_token" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "user_id" => Str::random(9),
                "user_firstName" => "Ahmad Akbar",
                "user_lastName" => "Rivai",
                "user_username" => "akbar.rivai",
                "password" => "akbar1234",
                "user_company" => "Institute Teknologi Sepuluh Nopember",
                "user_jobTitle" => "Assets Integrity Engineer",
                "user_phoneNumber" => "08220001",
                "user_address" => "Sukolilo",
                "user_status" => true,
                "user_email" => "ahmad.akbar@gmail.com",
                "user_emailVerifiedAt" => "2024-01-01",
                "user_remember_token" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "user_id" => Str::random(9),
                "user_firstName" => "Amirta Mega",
                "user_lastName" => "Prastiwi",
                "user_username" => "amirta.mega",
                "password" => "amirta1234",
                "user_company" => "Institute Teknologi Sepuluh Nopember",
                "user_jobTitle" => "Digital Marine Operation and Maintenance",
                "user_phoneNumber" => "08220002",
                "user_address" => "Sukolilo",
                "user_status" => true,
                "user_email" => "amirta.mega@gmail.com",
                "user_emailVerifiedAt" => "2024-01-01",
                "user_remember_token" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
            [
                "user_id" => Str::random(9),
                "user_firstName" => "Hesti",
                "user_lastName" => "Rahmawati",
                "user_username" => "hesti.rahmawati",
                "password" => "hesti1234",
                "user_company" => "Institute Teknologi Sepuluh Nopember",
                "user_jobTitle" => "Marin Engineer FTK-ITS",
                "user_phoneNumber" => "08220003",
                "user_address" => "Sukolilo",
                "user_status" => true,
                "user_email" => "hesti.rahmawati@gmail.com",
                "user_emailVerifiedAt" => "2024-01-01",
                "user_remember_token" => false,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ],
        ]);
    }
}
