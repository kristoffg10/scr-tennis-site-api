<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(array $pages, array $pageSections): void
    {
        $buttons = [];

        foreach ($pageSections as $section) {
            foreach ($pages as $page) {
                if ($section['name'] === 'Manage your e-policies CTA' && $page['identifier'] === 'products') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Create an Account',
                        'link'          => '/signup',
                        'is_link_out'   => 1,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Login to Portal',
                        'link'          => '/login',
                        'is_link_out'   => 1,
                        'order'         => 2
                    ];
                }
                if ($section['name'] === 'Other Products CTA' && $page['identifier'] === 'products') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Buy Insurance Online',
                        'link'          => '/products',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'my-life-plus') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'my-life-plus') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'e-zy-dengue') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'e-zy-dengue') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'e-zy-pneumonia') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'e-zy-pneumonia') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'travel-insurance') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'travel-insurance') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'auto-insurance') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'auto-insurance') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'takaful-personal-accident') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'er-protect') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'er-protect') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
                if ($section['name'] === 'Coverage & Benefits CTA' && $page['identifier'] === 'e-zy-pneumonia') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Download PDF Brochure',
                        'link'          => '/download-file',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                }
                if ($section['name'] === 'Additional Information CTA' && $page['identifier'] === 'e-zy-pneumonia') {
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Limitations',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 1
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Exclusions',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 2
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'Payment Options',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 3
                    ];
                    $buttons[] = [
                        'id'            => (string) Str::uuid(),
                        'parent'        => $section['id'],
                        'button_name'   => 'How to file a claim',
                        'link'          => '/',
                        'is_link_out'   => 0,
                        'order'         => 4
                    ];
                }
            }
        }
        DB::table('buttons')->insert($buttons);
    }
}
