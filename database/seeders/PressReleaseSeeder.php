<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PressReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $title = "Sample Blog Article {$i}";

            DB::table('articles')->insert([
                'id'          => (string) Str::uuid(),
                'title'       => $title,
                'content'     => "This is the content for {$title}.",
                'type'        => 'press-release',
                'date'        => Carbon::now()->subDays($i),
                'slug'        => Str::slug($title),
                'category_id' => '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', // replace with real category UUID if needed
                'enabled'     => 1,
                'featured'    => 0,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
