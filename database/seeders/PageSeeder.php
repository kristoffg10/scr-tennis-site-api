<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): array
    {
        $pages = [
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Homepage',
                'slug'              => 'homepage',
                'identifier'        => 'homepage',
                'category'          => 'Homepage',
                'order'             => 1,
                'page_parent'       => 1,
                'page_parent_seq'   => 'A1'
            ],
        ];

        DB::table('pages')->insert($pages);
        return $pages;
    }
}
