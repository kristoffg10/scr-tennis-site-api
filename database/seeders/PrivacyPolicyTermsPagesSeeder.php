<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyTermsPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'id'                => '22aa9716-c9cf-11f0-8eb5-00155dd8d5a3',
                'name'              => 'Privacy Policy',
                'slug'              => 'privacy-policy',
                'identifier'        => 'privacy-policy',
                'category'          => 'Privacy Policy',
                'order'             => '2',
                'page_parent'       => '1',
                'page_parent_seq'   => 'A2',
                'created_at'        => NULL,
                'updated_at'        => NULL,
                'deleted_at'        => NULL
            ],
            [
                'id'                => 'f15997e8-c9ce-11f0-8eb5-00155dd8d5a3',
                'name'              => 'Terms and Conditions',
                'slug'              => 'terms-and-conditions',
                'identifier'        => 'terms-and-conditions',
                'category'          => 'Terms and Conditions',
                'order'             => '3',
                'page_parent'       => '1',
                'page_parent_seq'   => 'A3',
                'created_at'        => NULL,
                'updated_at'        => NULL,
                'deleted_at'        => NULL
            ]
        ];

        DB::table('pages')->insert($pages);
    }
}

