<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Global City',
                'slug'              => Str::slug('Global City'),
                'abbreviation'      => 'BGC',
                'contact_number'    => '8-789-7700',
                'local'             => '1032 / 1035',
                'address'           => 'Rizal Drive cor. 32nd St. & 5th Avenue, Taguig, 1634',
                'created_at'        => now()
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Quezon City',
                'slug'              => Str::slug('Quezon City'),
                'abbreviation'      => 'QC',
                'contact_number'    => '8-723-0101',
                'local'             => '1912 / 5433',
                'address'           => '279 E Rodriguez Sr. Avenue, Quezon City, 1112',
                'created_at'        => now()
            ]
        ];

        DB::table('locations')->insert($locations);
    }
}
