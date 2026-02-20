<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacyPolicyPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSections = [
            [
                'id'            => '903ecfb5-c9d0-11f0-8eb5-00155dd8d5a3',
                'page_id'       => '22aa9716-c9cf-11f0-8eb5-00155dd8d5a3',
                'name'          => 'Content',
                'title'         => 'Privacy Policy',
                'sub_text'      => NULL,
                'description'   => NULL,
                'order'         => '1',
                'has_button'    => '0',
                'created_at'    => NULL,
                'updated_at'    => NULL,
                'deleted_at'    => NULL
            ]
        ];

        DB::table('page_sections')->insert($pageSections);
    }
}

