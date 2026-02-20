<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'id'            => (string) Str::uuid(),
            'name'          => 'Promos',
            'created_at'    => now()
        ];

        DB::table('article_categories')->insert($category);
    }
}
