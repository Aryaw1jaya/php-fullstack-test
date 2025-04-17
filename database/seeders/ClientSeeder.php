<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'PT Maju Jaya',
                'slug' => 'pt-maju-jaya',
                'is_project' => '1',
                'self_capture' => '1',
                'client_prefix' => 'MJYA',
                'client_logo' => 'logo-majujaya.jpg',
                'address' => 'Jl. Raya Merdeka No.1, Jakarta',
                'phone_number' => '0211234567',
                'city' => 'Jakarta',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'CV Sukses Selalu',
                'slug' => 'cv-sukses-selalu',
                'is_project' => '0',
                'self_capture' => '0',
                'client_prefix' => 'SKSL',
                'client_logo' => 'no-image.jpg',
                'address' => 'Jl. Kenangan Indah No.2, Bandung',
                'phone_number' => '0227654321',
                'city' => 'Bandung',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'UD Amanah',
                'slug' => 'ud-amanah',
                'is_project' => '1',
                'self_capture' => '1',
                'client_prefix' => 'AMAN',
                'client_logo' => 'logo-amanah.jpg',
                'address' => 'Jl. Sejahtera No.3, Surabaya',
                'phone_number' => '0318899000',
                'city' => 'Surabaya',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ];

        DB::table('my_clients')->insert($clients);
    }
}
