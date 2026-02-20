<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class InternationalInsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $international_insurances = [
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'AA International Inc., Malaysia',
                'slug'          => Str::slug('AA International Inc., Malaysia'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Aetna International (GovGuam)',
                'slug'          => Str::slug('Aetna International (GovGuam)'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Aetna Ministry of Foreign Affairs',
                'slug'          => Str::slug('Aetna Ministry of Foreign Affairs'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'APRIL Hong Kong Limited',
                'slug'          => Str::slug('APRIL Hong Kong Limited'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Asia Rescue and Medical Services PVT, Ltd.',
                'slug'          => Str::slug('Asia Rescue and Medical Services PVT, Ltd.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Asian Assistance Thailand',
                'slug'          => Str::slug('Asian Assistance Thailand'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'ATMS Asian Travel and Medical Services LLP',
                'slug'          => Str::slug('ATMS Asian Travel and Medical Services LLP'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Assist and Assistance Concept',
                'slug'          => Str::slug('Assist and Assistance Concept'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Autonomous Bougainville Government',
                'slug'          => Str::slug('Autonomous Bougainville Government'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'BUPA International',
                'slug'          => Str::slug('BUPA International'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Brightcare Assist Philippines',
                'slug'          => Str::slug('Brightcare Assist Philippines'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => "Calvo's Selectcare",
                'slug'          => Str::slug("Calvo's Selectcare"),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'CIGNA International Corporation',
                'slug'          => Str::slug('CIGNA International Corporation'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Commonwealth of the Northern Mariana Islands',
                'slug'          => Str::slug('Commonwealth of the Northern Mariana Islands'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Generali Global Health Services',
                'slug'          => Str::slug('Generali Global Health Services'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Global MD Healthcare Systems Inc.',
                'slug'          => Str::slug('Global MD Healthcare Systems Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'GMMI Inc.',
                'slug'          => Str::slug('GMMI Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'GOA Clinic',
                'slug'          => Str::slug('GOA Clinic'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Gulf Union Cooperative Insurance Co.',
                'slug'          => Str::slug('Gulf Union Cooperative Insurance Co.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Euro-Center (Thailand) Co., Ltd',
                'slug'          => Str::slug('Euro-Center (Thailand) Co., Ltd'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Falck Global Assistance',
                'slug'          => Str::slug('Falck Global Assistance'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Henner (formerly GMC Services) - VUMI',
                'slug'          => Str::slug('Henner (formerly GMC Services) - VUMI'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'IMG International Medical Group',
                'slug'          => Str::slug('IMG International Medical Group'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'IMS Incorporated Medical Systems, Ltd.',
                'slug'          => Str::slug('IMS Incorporated Medical Systems, Ltd.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Insurance Management Systems, Ltd.',
                'slug'          => Str::slug('Insurance Management Systems, Ltd.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Indus Health Plust Ltd. Pvt.',
                'slug'          => Str::slug('Indus Health Plust Ltd. Pvt.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'InterGlobal Limited',
                'slug'          => Str::slug('InterGlobal Limited'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Medpharm Philippines, Inc.',
                'slug'          => Str::slug('Medpharm Philippines, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'MiCare',
                'slug'          => Str::slug('MiCare'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'MSH International / MSH China Enterprise Services Co. Ltd.',
                'slug'          => Str::slug('MSH International / MSH China Enterprise Services Co. Ltd.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Netcare Life and Health Insurance',
                'slug'          => Str::slug('Netcare Life and Health Insurance'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Palau Health Insurance',
                'slug'          => Str::slug('Palau Health Insurance'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Paramount Healthcare Management Pvt., Ltd.',
                'slug'          => Str::slug('Paramount Healthcare Management Pvt., Ltd.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Quality Health Management, LLC. (QHM)',
                'slug'          => Str::slug('Quality Health Management, LLC. (QHM)'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Seven Corners, Inc.',
                'slug'          => Str::slug('Seven Corners, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Stay-Well Guam, Inc.',
                'slug'          => Str::slug('Stay-Well Guam, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'TakeCare Asia Philippines Inc.',
                'slug'          => Str::slug('TakeCare Asia Philippines Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Tricare (Philippine Demonstration Project) Retired',
                'slug'          => Str::slug('Tricare (Philippine Demonstration Project) Retired'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'United Healthcare International Inc.',
                'slug'          => Str::slug('United Healthcare International Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'VYV International Assistance',
                'slug'          => Str::slug('VYV International Assistance'),
                'created_at'    => now()
            ],
        ];

        DB::table('international_insurances')->insert($international_insurances);
    }
}
