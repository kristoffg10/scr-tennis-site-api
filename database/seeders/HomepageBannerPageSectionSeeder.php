<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomepageBannerPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageSections = [
            [
                'id'            => '6d0af61c-cb56-11f0-a135-00155dd8dc27',
                'page_id'       => 'eff3d545-df19-4d8c-b335-70dafc36bb39',
                'name'          => 'Banner',
                'title'         => 'Homepage Image Banner',
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

