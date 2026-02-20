<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(array $pages): array
    {
        $pageSections = [];

        foreach ($pages as $page) {
            if ($page['identifier'] === 'products') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'Buy Insurance Online with Etiqa',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Manage your e-policies CTA',
                    'title'         => 'Manage your e-policies with',
                    'sub_text'      => 'Etiqa Shop Portal',
                    'description'   => 'Manage online policies, request logs, and claims anywhere.',
                    'order'         => 2,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Declarations & Terms',
                    'title'         => 'Declarations & Terms',
                    'sub_text'      => NULL,
                    'description'   => null,
                    'order'         => 3,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Reminders',
                    'title'         => 'Reminders',
                    'sub_text'      => NULL,
                    'description'   => null,
                    'order'         => 4,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Beneficiaries Label',
                    'title'         => 'Beneficiaries Label',
                    'sub_text'      => NULL,
                    'description'   => null,
                    'order'         => 4,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'How can I pay online',
                    'title'         => 'How can I pay online?',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];

                // $pageSections[] = [
                //     'id'            => (string) Str::uuid(),
                //     'page_id'       => $page['id'],
                //     'name'          => 'Customer Reviews UVP',
                //     'title'         => 'Customer Reviews',
                //     'sub_text'      => NULL,
                //     'description'   => NULL,
                //     'order'         => 4,
                //     'has_button'    => 0
                // ];
                // $pageSections[] = [
                //     'id'            => (string) Str::uuid(),
                //     'page_id'       => $page['id'],
                //     'name'          => 'Other Products CTA',
                //     'title'         => 'Other Products You Might Like',
                //     'sub_text'      => NULL,
                //     'description'   => NULL,
                //     'order'         => 5,
                //     'has_button'    => 1
                // ];
                // $pageSections[] = [
                //     'id'            => (string) Str::uuid(),
                //     'page_id'       => $page['id'],
                //     'name'          => 'First some reminders CTA',
                //     'title'         => 'First, some reminders:',
                //     'sub_text'      => NULL,
                //     'description'   => NULL,
                //     'order'         => 6,
                //     'has_button'    => 0
                // ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Etiqa Online Shop CTA',
                    'title'         => 'Ready to get protected?',
                    'sub_text'      => 'Buy this policy now!',
                    'description'   => 'With the Etiqa Online Shop, you’ll be able to buy this policy within a few minutes!',
                    'order'         => 7,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Health Declaration',
                    'title'         => 'Health Declaration',
                    'sub_text'      => 'sub text health declaration',
                    'description'   => 'description text health declaration',
                    'order'         => 8,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'my-life-plus') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'MyLife Plus',
                    'sub_text'      => 'Medical',
                    'description'   => 'A comprehensive health insurance plan that gives you access to extensive medical network nationwide.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Life can be unpredictable, but your insurance plan doesn\'t have to be uncertain.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Check out our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For MyLife Plus',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For MyLife Plus',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Before we continue',
                    'title'         => 'Before we continue, please check everything that applies to you.',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Reminders on Health Declaration',
                    'title'         => 'Reminders on Health Declaration',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 7,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Do you have beneficiaries',
                    'title'         => 'Do you have beneficiaries?',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 8,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Reminders on Beneficiaries',
                    'title'         => 'Reminders on Beneficiaries',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 9,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 10,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Policy Declarations',
                    'title'         => 'Policy Declarations',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 11,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'e-zy-dengue') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'E-ZY Dengue',
                    'sub_text'      => 'Medical',
                    'description'   => 'Offers financial assistance for you and your family to cover the high-cost of confinement due to Community-Acquired-Pneumonia (CAP).',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Protect yourself and your loved ones from the financial challenges of Dengue.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Check out our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For E-ZY Dengue',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For E-ZY Dengue',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'e-zy-pneumonia') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'E-ZY Pneumonia',
                    'sub_text'      => 'Medical',
                    'description'   => 'Offers financial assistance for you and your family to cover the high-cost of confinement due to Community-Acquired-Pneumonia (CAP).',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Protection and peace of mind when Pneumonia Strikes.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Check out our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For E-ZY Pneumonia',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For E-ZY Pneumonia',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'travel-insurance') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'Travel Insurance',
                    'sub_text'      => 'Travel',
                    'description'   => 'Designed to protect you against unforeseen events while traveling. It protects you against medical expenses, flight cancellations and travel inconveniences.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'A comprehensive travel insurance plan that is designed to protect you against unforseen events while travelling.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Checkout our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For Travel Insurance',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For Travel Insurance',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'auto-insurance') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'Auto Insurance',
                    'sub_text'      => 'Vehicle',
                    'description'   => 'Designed to cover expenses incurred after a vehicular accident or loss while on the road.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Designed to cover expenses incurred after a vehicular accident or loss while on the road.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Check out our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Roadside Assistance',
                    'title'         => 'Get 24/7 Roadside Assistance',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For Auto Insurance',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For Auto Insurance',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 7,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'takaful-personal-accident') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'Takaful Personal Accident',
                    'sub_text'      => 'Protection',
                    'description'   => 'An annual accident plan providing coverage for death, disability, and medical expenses resulting from accidents and available for individuals aged 18-65.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Qualify for Cashback by making no claims, cancellations before expiry, and maintaining no outstanding contributions during the certificate term.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For Travel Insurance',
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For Travel Insurance',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Before we continue',
                    'title'         => 'Before we continue, please check everything that applies to you.',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Reminders on Health Declaration',
                    'title'         => 'Reminders on Health Declaration',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'er-protect') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'ER Protect',
                    'sub_text'      => 'Medical',
                    'description'   => 'Offers emergency care to you or your loved ones. Simply present your Etiqa virtual card in the Smile PH App, and the expenses incurred will be taken care of. This also provides assistance for accidental death and dismemberment.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Get protection from the urgent financial needs during an emergency.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Coverage & Benefits CTA',
                    'title'         => 'Checkout our Guaranteed Coverage & Benefits',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For ER Protect',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For ER Protect',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'ctpl') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'CTPL',
                    'sub_text'      => 'Vehicle',
                    'description'   => 'An annual accident plan providing coverage for death, disability, and medical expenses resulting from accidents and available for individuals aged 18-65.',
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Key Highlights UVP',
                    'title'         => 'Brings the convenience of getting your vehicle\'s Compulsory Third Party Liability from anywhere online.',
                    'sub_text'      => 'Key Highlights',
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Vehicle type UVP',
                    'title'         => 'Check out our affordable rates for every vehicle type',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Additional Information CTA',
                    'title'         => 'Additional Information',
                    'sub_text'      => 'For CTPL',
                    'description'   => NULL,
                    'order'         => 4,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'FAQs',
                    'sub_text'      => 'For CTPL',
                    'description'   => NULL,
                    'order'         => 5,
                    'has_button'    => 0
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'One last thing',
                    'title'         => 'One last thing!',
                    'sub_text'      => 'Let\'s review the declarations & terms.',
                    'description'   => NULL,
                    'order'         => 6,
                    'has_button'    => 0
                ];
            }
            if ($page['identifier'] === 'online-portal') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Top Banner',
                    'title'         => 'All your digital insurance needs, in one place.',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 1,
                    'has_button'    => 0
                ];
                $pagSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Get Coverage CTA',
                    'title'         => 'Get coverage online with',
                    'sub_text'      => 'Etiqa Shop',
                    'description'   => 'Get your policy online, hassle-free and in a flash!',
                    'order'         => 2,
                    'has_button'    => 1
                ];
            }
            if ($page['identifier'] === 'get-help') {
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'Emmy CTA',
                    'title'         => 'Talk to Emmy, our new and friendly chatbot!',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 2,
                    'has_button'    => 1
                ];
                $pageSections[] = [
                    'id'            => (string) Str::uuid(),
                    'page_id'       => $page['id'],
                    'name'          => 'FAQs UVP',
                    'title'         => 'Here are some frequently asked questions',
                    'sub_text'      => NULL,
                    'description'   => NULL,
                    'order'         => 3,
                    'has_button'    => 0
                ];
            }
        }

        DB::table('page_sections')->insert($pageSections);

        return $pageSections;
    }
}
