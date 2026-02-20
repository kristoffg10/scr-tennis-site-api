<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HMOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hmos = [
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Aetna International',
                'slug'          => Str::slug('Aetna International'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Allianz PNB Life Insurance Inc.',
                'slug'          => Str::slug('Allianz PNB Life Insurance Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Avega Managed Care Inc.',
                'slug'          => Str::slug('Avega Managed Care Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Benlife',
                'slug'          => Str::slug('Benlife'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Bupa International',
                'slug'          => Str::slug('Bupa International'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Calvo’s Select Care (formulary)',
                'slug'          => Str::slug('Calvo’s Select Care'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Carehealth Plus Systems International',
                'slug'          => Str::slug('Carehealth Plus Systems International'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Carewell Health Systems, Inc.',
                'slug'          => Str::slug('Carewell Health Systems, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Caritas Health Shield, Inc.',
                'slug'          => Str::slug('Caritas Health Shield, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Cocolife Health Care',
                'slug'          => Str::slug('Cocolife Health Care'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Cooperative Health Management Federation',
                'slug'          => Str::slug('Cooperative Health Management Federation'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'EastWest Healthcare, Inc.',
                'slug'          => Str::slug('EastWest Healthcare, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Etiqa Life and General Assurance Philippines, Inc. (Formerly Asianlife)',
                'slug'          => Str::slug('Etiqa Life and General Assurance Philippines, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Flexicare',
                'slug'          => Str::slug('Flexicare'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Generali Life Assurance Philippines, Inc.',
                'slug'          => Str::slug('Generali Life Assurance Philippines, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Health Maintenance, Inc.',
                'slug'          => Str::slug('Health Maintenance, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Health Plan Philippines, Inc.',
                'slug'          => Str::slug('Health Plan Philippines, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Insular Health Care, Inc.',
                'slug'          => Str::slug('Insular Health Care, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'IntelliCare (Asalus Corporation)',
                'slug'          => Str::slug('IntelliCare (Asalus Corporation)'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'JMI ASIA-PACIFIC, Inc.',
                'slug'          => Str::slug('JMI ASIA-PACIFIC, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Kaiser International Healthgroup Inc.',
                'slug'          => Str::slug('Kaiser International Healthgroup Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Lacson and Lacson Insurance Brokers, Inc.',
                'slug'          => Str::slug('Lacson and Lacson Insurance Brokers, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Life & Health HMO, Inc.',
                'slug'          => Str::slug('Life & Health HMO, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Maxicare Healthcare Corporation',
                'slug'          => Str::slug('Maxicare Healthcare Corporation'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'MedAsia Philippines',
                'slug'          => Str::slug('MedAsia Philippines'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'MEDICard Philippines, Inc.',
                'slug'          => Str::slug('MEDICard Philippines, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Medicare Plus Inc.',
                'slug'          => Str::slug('Medicare Plus Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'MEDOcareHealth Systems, Inc.',
                'slug'          => Str::slug('MEDOcareHealth Systems, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'NetCare Life & Health Insurance Company (formulary)',
                'slug'          => Str::slug('NetCare Life & Health Insurance Company'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Pacific Cross Health Care Inc.',
                'slug'          => Str::slug('Pacific Cross Health Care Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'PhilCare (Philhealth Care Inc.)',
                'slug'          => Str::slug('PhilCare'),
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
                'name'          => 'Staywell Insurance (formulary)',
                'slug'          => Str::slug('Staywell Insurance'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Sun Life Grepa Financial',
                'slug'          => Str::slug('Sun Life Grepa Financial'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Takecare Insurance Co. (formulary)',
                'slug'          => Str::slug('Takecare Insurance Co.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'ValuCare Health Systems, Inc.',
                'slug'          => Str::slug('ValuCare Health Systems, Inc.'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Vanbreda International',
                'slug'          => Str::slug('Vanbreda International'),
                'created_at'    => now()
            ],
            [
                'id'            => (string) Str::uuid(),
                'name'          => 'Wellcare Health Maintenance',
                'slug'          => Str::slug('Wellcare Health Maintenance'),
                'created_at'    => now()
            ],
        ];


        DB::table('h_m_o_s')->insert($hmos);
    }
}
