<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create products first
        $products = $this->seedProducts();

        // Seed relationships with unique content for each product
        foreach ($products as $product) {
            $this->seedPageSectionsForProduct($product);
            $this->seedHighlights($product);
            // $this->seedCoverages($product);
            $this->seedReviews($product);
            $this->seedFaqs($product);

            // Only seed flights for travel products
            // if ($product['category'] === 'Travel') {
            //     $this->seedFlights($product);
            // }
        }
    }

    /**
     * Seed products table
     */
    private function seedProducts(): array
    {
        $products = [
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Travel Insurance',
                'slug'              => 'travel-insurance',
                'description'       => "Designed to protect you against unforeseen events while traveling.",
                'category'          => 'Travel',
                'order'             => 1,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Auto Insurance',
                'slug'              => 'auto-insurance',
                'description'       => "Designed to cover expenses incurred after a vehicular accident or loss while on the road.",
                'category'          => 'Vehicle',
                'order'             => 2,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'My Life Plus',
                'slug'              => 'my-life-plus',
                'description'       => "A comprehensive health insurance plan that gives you access to Etiqa's extensive medical network nationwide.",
                'category'          => 'Medical',
                'order'             => 3,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'CTPL',
                'slug'              => 'ctpl',
                'description'       => "Our E-CTPL plan brings the convenience of getting your vehicle's Compulsory Third-Party Liability from anywhere online.",
                'category'          => 'Vehicle',
                'order'             => 4,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'E-ZY Dengue',
                'slug'              => 'e-zy-dengue',
                'description'       => "A reimbursement plan that provides financial assistance for hospitalization caused by Dengue.",
                'category'          => 'Medical',
                'order'             => 5,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'E-ZY Pneumonia',
                'slug'              => 'e-zy-pneumonia',
                'description'       => "A reimbursement plan that provides financial assistance for hospitalization caused by Pneumonia.",
                'category'          => 'Medical',
                'order'             => 6,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'Takaful Personal Accident',
                'slug'              => 'takaful-personal-accident',
                'description'       => "An annual accident insurance plan providing coverage for death, disability, and medical expenses resulting from accidents.",
                'category'          => 'Protection',
                'order'             => 7,
            ],
            [
                'id'                => (string) Str::uuid(),
                'name'              => 'ER Protect',
                'slug'              => 'er-protect',
                'description'       => "Offers emergency care to you, your loved ones or your employees. Covers expenses incurred in the emergency room.",
                'category'          => 'Medical',
                'order'             => 8,
            ],
        ];

        DB::table('products')->insert($products);

        return $products;
    }

    /**
     * Seed page sections for a specific product
     */
    private function seedPageSectionsForProduct(array $product): void
    {
        // Product-specific page section content
        $productContentMap = [
            'Travel Insurance' => [
                'title' => "Life can be unpredictable, but your insurance plan doesn't have to be uncertain.",
            ],
            'Auto Insurance' => [
                'title' => 'Designed to cover expenses incurred after a vehicular accident or loss while on the road.',
            ],
            'My Life Plus' => [
                'title' => "Life can be unpredictable, but your insurance plan doesn't have to be uncertain.",
            ],
            'CTPL' => [
                'title' => 'Brings the convenience of getting your vehicle\'s Compulsory Third Party Liability from anywhere online.',
            ],
            'E-ZY Dengue' => [
                'title' => 'Protect yourself and your loved ones from the financial challenges of Dengue.',
            ],
            'E-ZY Pneumonia' => [
                'title' => 'Protection and peace of mind for when Pneumonia strikes.',
            ],
            'Takaful Personal Accident' => [
                'title' => 'Qualify for Cashback by making no claims, cancellations before expiry, and maintaining no outstanding contributions during the certificate term.',
            ],
            'ER Protect' => [
                'title' => 'Get protection from the urgent financial needs during an emergency.',
            ],
        ];

        // Default content if specific product not found
        $defaultContent = [
            'title' => 'Comprehensive Insurance Coverage',
        ];

        // Get content specific to this product or use default
        $content = $productContentMap[$product['name']] ?? $defaultContent;

        $pageSectionHighlights = [
            'id' => (string) Str::uuid(),
            'page_id' => $product['id'],
            'name' => 'Highlights',
            'title' => $content['title'], // Store the original title directly
            'description' => '',
            'order' => 1, // Use the order from the product
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        DB::table('page_sections')->insert($pageSectionHighlights); // Insert the Highlights section
        
        if ($product['name'] === 'Auto Insurance') {
            $pageSectionNotes = [
                'id' => (string) Str::uuid(),
                'page_id' => $product['id'],
                'name' => 'Notes',
                'title' => 'Notes on this product',
                'description' => 'Commercial Vehicle Coverage cannot be availed online. Manual offline processing is required.',
                'order' =>  2, // Consider incrementing the order for the Notes section
                'created_at' => now(),
                'updated_at' => now(),
            ];
        
            DB::table('page_sections')->insert($pageSectionNotes); // Insert the Notes section
        }
    }

    /**
     * Seed highlights for a product with unique content
     */
    private function seedHighlights(array $product): void
    {
        // Product-specific page section content
        $productContentMap =[
            'Travel Insurance' => [
                [
                    'order' => 1,
                    'title' => "Easy and Fast Online Purchasing",
                    'description' => "Buy this online policy anytime, anywhere within minutes!",
                ],
                [
                    'order' => 2,
                    'title' => "Eligibility Criteria ",
                    'description' => "Individuals and families from 0 to 80 years old may avail.",
                ],
                [
                    'order' => 3,
                    'title' => "Additional Coverage Available",
                    'description' => "Protection against losses of your electronic gadgets and jewelry, as well as coverage for any unexpected travel delays",
                ],
            ],
            'Auto Insurance' => [
                [
                    'order' => 1,
                    'title' => "24/7 Emergency Roadside Assistance",
                    'description' => "In the event of an emergency, get help with your vehicle anytime, anywhere.",
                ],
                [
                    'order' => 2,
                    'title' => "Comprehensive Damage Coverage",
                    'description' => "Get coverage for damages to third-party vehicles, property, bodily injuries and death.",
                ],
                [
                    'order' => 3,
                    'title' => "Eligibility Criteria ",
                    'description' => "Vehicles of all ages may be accepted by this plan.",
                ],
                [
                    'order' => 4,
                    'title' => "Private Vehicle Coverage",
                    'description' => "Covers vehicles used for private use such as: sedan, SUV, pick-up, van",
                ],
                [
                    'order' => 5,
                    'title' => "Commercial Vehicle Coverage",
                    'description' => "Covers vehicles used for commercial use such as: trucks, buses, for hire, yellow plates and rainbow plates.",
                ],
            ],
            'My Life Plus' => [
                [
                    'order' => 1,
                    'title' => "Extensive Medical Net work Nationwide",
                    'description' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'title' => "Eligibility Criteria ",
                    'description' => "Available to 0 to 70-year-old Filipinos or legal residents, who are in good health.",
                ],
                [
                    'order' => 3,
                    'title' => "Pre-existing Condition Coverage",
                    'description' => "Pre-existing conditions will be covered after 12 months.",
                ],
            ],
            'CTPL' => [
                [
                    'order' => 1,
                    'title' => "Easy and Fast Online Purchasing",
                    'description' => "Buy this online policy anytime, anywhere within minutes!",
                ],
                [
                    'order' => 2,
                    'title' => "Coverage for Private Vehicles",
                    'description' => "Cover your private vehicles with the mandatory LTO insurance.",
                ],
                [
                    'order' => 3,
                    'title' => "Coverage for Commercial Vehicles",
                    'description' => "We’ll help keep your business’ vehicles protected and covered.",
                ],
            ],
            'E-ZY Dengue' => [
                [
                    'order' => 1,
                    'title' => "Eligibility Criteria for Individuals",
                    'description' => "Individuals from 18-65 years old may be covered for as low as PHP 100.",
                ],
                [
                    'order' => 2,
                    'title' => "Eligibility Criteria for Families ",
                    'description' => "Families with children from 0-17 years old may be covered for as low as PHP 500.",
                ],
                [
                    'order' => 3,
                    'title' => "Extensive Hospital Coverage",
                    'description' => "Up to PHP 30,000 Room/board and general hospital services. Up to PHP 10,000 Accidental death and dismemberment benefit.",
                ],
                [
                    'order' => 4,
                    'title' => "Easy One-time Payment",
                    'description' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
                ],
            ],
            'E-ZY Pneumonia' => [
                [
                    'order' => 1,
                    'title' => "Eligibility Criteria for Individuals",
                    'description' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'title' => "Eligibility Criteria for Families",
                    'description' => "Available to 0 to 70-year-old Filipinos or legal residents, who are in good health.",
                ],
                [
                    'order' => 3,
                    'title' => "Extensive Hospital Coverage",
                    'description' => "Up to PHP 50,000 Room/board and general hospital services. Up to PHP 10,000 Accidental death and dismemberment benefit.",
                ],
                [
                    'order' => 4,
                    'title' => "COVID-19 Pneumonia Coverage",
                    'description' => "Individuals from 18-65 years old may be covered for as low as PHP 180.",
                ],
                [
                    'order' => 5,
                    'title' => "Easy One-time Payment",
                    'description' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
                ],
            ],
            'Takaful Personal Accident' => [
                [
                    'order' => 1,
                    'title' => "Medical & Hospital Benefits in case of an accident",
                    'description' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'title' => "Permanent Disability and Recovery Assistance",
                    'description' => "An annual accident plan providing coverage for death, disability, and medical expenses resulting from accidents and available for individuals aged 18-65. ",
                ],
                [
                    'order' => 3,
                    'title' => "Financial security for the family",
                    'description' => "Stay worry-free with your family’s finances and know that we’ll help you cover expenses resulting from accidents.    ",
                ],
            ],
            'ER Protect' => [
                [
                    'order' => 1,
                    'title' => "Eligibility Criteria for Individuals",
                    'description' => "Individuals from 2-70 years old may be covered for as low as PHP 925.",
                ],
                [
                    'order' => 2,
                    'title' => "Emergency Care Coverage",
                    'description' => "Up to PHP 50,000 outpatient emergency care coverage consumable within a year with surgical expenses and ambulance service benefits.",
                ],
                [
                    'order' => 3,
                    'title' => "Room and Board Coverage",
                    'description' => "Room and board in case of confinement, inclusive of other inpatient accommodations like food and general nursing services.",
                ],
                [
                    'order' => 4,
                    'title' => "Accidental Death and Dismemberment Benefit",
                    'description' => "Up to PHP 25,000 Accidental death and dismemberment benefit.",
                ],
                [
                    'order' => 5,
                    'title' => "Easy One-time Payment",
                    'description' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
                ],
            ]
        ];
        // Default content if specific product not found
        $defaultContent = [
            [
                'title' => "Sample Title",
                'description' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
            ],
        ];

        // Get content specific to this product or use default
        $contentArray = $productContentMap[$product['name']] ?? $defaultContent;

        // Loop through the content array and insert each highlight
        foreach ($contentArray as $content) {
            $highlight = [
                'id' => (string) Str::uuid(),
                'parent_id' => $product['id'],
                'title' => $content['title'],
                'description' => $content['description'], // Use description from the content array
                'order' => $content['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('highlights')->insert($highlight);
        }
    }

    /**
     * Seed coverages for a product with unique content
     */
    // private function seedCoverages(array $product): void
    // {
    //     $coveragesMap = [
    //         'Travel' => [
    //             [
    //                 'name' => 'Medical Expenses',
    //                 'description' => 'Coverage for emergency medical treatments abroad',
    //                 'amount' => 'Up to ₱500,000',
    //             ],
    //             [
    //                 'name' => 'Trip Cancellation',
    //                 'description' => 'Reimbursement for non-refundable expenses',
    //                 'amount' => 'Up to ₱100,000',
    //             ],
    //             [
    //                 'name' => 'Personal Liability',
    //                 'description' => 'Protection against third-party claims',
    //                 'amount' => 'Up to ₱1,000,000',
    //             ],
    //         ],
    //         'Vehicle' => [
    //             [
    //                 'name' => 'Own Damage',
    //                 'description' => 'Coverage for damages to your vehicle',
    //                 'amount' => 'Up to vehicle market value',
    //             ],
    //             [
    //                 'name' => 'Third-party Liability',
    //                 'description' => 'Coverage for damages to other vehicles and property',
    //                 'amount' => 'Up to ₱200,000',
    //             ],
    //             [
    //                 'name' => 'Personal Accident',
    //                 'description' => 'Coverage for driver and passengers',
    //                 'amount' => 'Up to ₱50,000 per person',
    //             ],
    //         ],
    //         'Medical' => [
    //             [
    //                 'name' => 'Inpatient Care',
    //                 'description' => 'Coverage for hospital room, board, and medical services',
    //                 'amount' => 'Up to ₱300,000 per year',
    //             ],
    //             [
    //                 'name' => 'Outpatient Care',
    //                 'description' => 'Coverage for consultations and treatments',
    //                 'amount' => 'Up to ₱15,000 per year',
    //             ],
    //             [
    //                 'name' => 'Emergency Care',
    //                 'description' => 'Coverage for emergency room services',
    //                 'amount' => 'Up to ₱50,000 per year',
    //             ],
    //         ],
    //         'Protection' => [
    //             [
    //                 'name' => 'Accidental Death',
    //                 'description' => 'Benefit paid to beneficiaries',
    //                 'amount' => 'Up to ₱500,000',
    //             ],
    //             [
    //                 'name' => 'Disability Benefit',
    //                 'description' => 'Coverage for permanent disability',
    //                 'amount' => 'Up to ₱500,000',
    //             ],
    //             [
    //                 'name' => 'Medical Reimbursement',
    //                 'description' => 'Coverage for accident-related medical expenses',
    //                 'amount' => 'Up to ₱100,000',
    //             ],
    //         ],
    //     ];

    //     // Get specific coverages based on product category or use default if not found
    //     $category = $product['category'];
    //     $productCoverages = $coveragesMap[$category] ?? $coveragesMap['Protection'];

    //     // Customize coverages based on product name
    //     if ($product['name'] === 'E-ZY Dengue') {
    //         $productCoverages = [
    //             [
    //                 'name' => 'Hospitalization',
    //                 'description' => 'Coverage for hospital confinement due to dengue',
    //                 'amount' => 'Up to ₱100,000',
    //             ],
    //             [
    //                 'name' => 'ICU Care',
    //                 'description' => 'Coverage for intensive care treatment',
    //                 'amount' => 'Up to ₱50,000',
    //             ],
    //             [
    //                 'name' => 'Diagnostic Tests',
    //                 'description' => 'Coverage for laboratory and diagnostic tests',
    //                 'amount' => 'Up to ₱10,000',
    //             ],
    //         ];
    //     } elseif ($product['name'] === 'E-ZY Pneumonia') {
    //         $productCoverages = [
    //             [
    //                 'name' => 'Hospitalization',
    //                 'description' => 'Coverage for hospital confinement due to pneumonia',
    //                 'amount' => 'Up to ₱150,000',
    //             ],
    //             [
    //                 'name' => 'Medication',
    //                 'description' => 'Coverage for prescribed antibiotics and medicines',
    //                 'amount' => 'Up to ₱20,000',
    //             ],
    //             [
    //                 'name' => 'Respiratory Support',
    //                 'description' => 'Coverage for respiratory treatments and equipment',
    //                 'amount' => 'Up to ₱30,000',
    //             ],
    //         ];
    //     } elseif ($product['name'] === 'CTPL') {
    //         $productCoverages = [
    //             [
    //                 'name' => 'Death Indemnity',
    //                 'description' => 'Compensation for death of a third party',
    //                 'amount' => '₱100,000 per person',
    //             ],
    //             [
    //                 'name' => 'Bodily Injury',
    //                 'description' => 'Medical expenses for injured third parties',
    //                 'amount' => 'Up to ₱50,000 per person',
    //             ],
    //             [
    //                 'name' => 'Property Damage',
    //                 'description' => 'Coverage for damage to third-party property',
    //                 'amount' => 'Up to ₱50,000 per accident',
    //             ],
    //         ];
    //     }

    //     // Create database records
    //     $coverages = [];
    //     foreach ($productCoverages as $index => $coverage) {
    //         $coverages[] = [
    //             'id' => (string) Str::uuid(),
    //             'parent_id' => $product['id'],
    //             'name' => $coverage['name'],
    //             'description' => $coverage['description'],
    //             'amount' => $coverage['amount'],
    //             'order' => $index + 1,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ];
    //     }

    //     DB::table('coverages')->insert($coverages);
    // }

    /**
     * Seed reviews for a product with unique content
     */
    private function seedReviews(array $product): void
    {
        $commonReviews = [
            [
                'full_name' => "Jonas Magnaye",
                'tagline' => "New Father of 3",
                'testimonial' => "As a young parent, making sure that my family is always protected and ready for anything is important to me. Etiqa's MyLife+ helps me achieve this.",
                'order' => 1
            ],
            [
                'full_name' => "Juan Magnaye",
                'tagline' => "Frequent Adventurer",
                'testimonial' => "With my active lifestyle, I want to feel protected no matter where I go or what I do. The MyLife+ plan is the perfect travel companion for me!",
                'order' => 2
            ],
            [
                'full_name' => "Alyanna Baser",
                'tagline' => "Young Professional",
                'testimonial' => "Taking care of my parents is one of the reasons why I do what I do. The MyLife+ plan makes me feel at ease knowing my parents are taken care of.",
                'order' => 3
            ],
        ];
    
        // No need for outer loop since we're processing a single product
        foreach ($commonReviews as $content) {
            $review = [
                'id' => (string) Str::uuid(),
                'parent_id' => $product['id'],
                'full_name' => $content['full_name'] ?? null,
                'tagline' => $content['tagline'] ?? null,
                'testimonial' => $content['testimonial'] ?? null,
                'order' => $content['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('reviews')->insert($review);
        }
    }

    /**
     * Seed FAQs for a product with unique content
     */
    private function seedFaqs(array $product): void
    {
        // Product-specific page section content
        $productContentMap = [
            'Travel Insurance' => [], // Intentionally left blank per request
            
            'Auto Insurance' => [
                [
                    'order' => 1,
                    'question' => "What roadside assistance is provided?",
                    'answer' => "In the event of an emergency, get help with your vehicle anytime, anywhere with our 24/7 Emergency Roadside Assistance.",
                ],
                [
                    'order' => 2,
                    'question' => "What damages are covered by this policy?",
                    'answer' => "Get coverage for damages to third-party vehicles, property, bodily injuries and death.",
                ],
                [
                    'order' => 3,
                    'question' => "What are the eligibility requirements?",
                    'answer' => "Vehicles of all ages may be accepted by this plan.",
                ],
                [
                    'order' => 4,
                    'question' => "Which private vehicles are covered?",
                    'answer' => "Covers vehicles used for private use such as: sedan, SUV, pick-up, van",
                ],
                [
                    'order' => 5,
                    'question' => "Which commercial vehicles are covered?",
                    'answer' => "Covers vehicles used for commercial use such as: trucks, buses, for hire, yellow plates and rainbow plates.",
                ],
            ],
            
            'My Life Plus' => [
                [
                    'order' => 1,
                    'question' => "How extensive is the medical network?",
                    'answer' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'question' => "Who is eligible for this plan?",
                    'answer' => "Available to 0 to 70-year-old Filipinos or legal residents, who are in good health.",
                ],
                [
                    'order' => 3,
                    'question' => "Are pre-existing conditions covered?",
                    'answer' => "Pre-existing conditions will be covered after 12 months.",
                ],
            ],
            
            'CTPL' => [
                [
                    'order' => 1,
                    'question' => "How can I purchase this insurance?",
                    'answer' => "Buy this online policy anytime, anywhere within minutes!",
                ],
                [
                    'order' => 2,
                    'question' => "Does this cover private vehicles?",
                    'answer' => "Cover your private vehicles with the mandatory LTO insurance.",
                ],
                [
                    'order' => 3,
                    'question' => "Is commercial vehicle coverage available?",
                    'answer' => "We'll help keep your business' vehicles protected and covered.",
                ],
            ],
            
            'E-ZY Dengue' => [], // Another example with empty array
            
            'E-ZY Pneumonia' => [
                [
                    'order' => 1,
                    'question' => "What medical facilities can I access?",
                    'answer' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'question' => "Who can apply for this coverage?",
                    'answer' => "Available to 0 to 70-year-old Filipinos or legal residents, who are in good health.",
                ],
                [
                    'order' => 3,
                    'question' => "What hospital benefits are included?",
                    'answer' => "Up to PHP 50,000 Room/board and general hospital services. Up to PHP 10,000 Accidental death and dismemberment benefit.",
                ],
                [
                    'order' => 4,
                    'question' => "Is COVID-19 pneumonia covered?",
                    'answer' => "Yes, individuals from 18-65 years old may be covered for as low as PHP 180.",
                ],
                [
                    'order' => 5,
                    'question' => "How do I make payments?",
                    'answer' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
                ],
            ],
            
            'Takaful Personal Accident' => [
                [
                    'order' => 1,
                    'question' => "What medical benefits are provided?",
                    'answer' => "Get access to 29,000+ doctors and 1,500+ hospitals and clinics nationwide.",
                ],
                [
                    'order' => 2,
                    'question' => "What assistance is available for disability?",
                    'answer' => "An annual accident plan providing coverage for death, disability, and medical expenses resulting from accidents and available for individuals aged 18-65.",
                ],
                [
                    'order' => 3,
                    'question' => "How does this protect my family?",
                    'answer' => "Stay worry-free with your family's finances and know that we'll help you cover expenses resulting from accidents.",
                ],
            ],
            
            'ER Protect' => [], // Another example with empty array
        ];
        
        // Default content if specific product not found or array is empty
        $defaultContent = [
            [
                'order' => 1,
                'question' => "What is this insurance product?",
                'answer' => "This is a comprehensive insurance solution designed to meet your specific needs.",
            ],
            [
                'order' => 2,
                'question' => "How do I purchase this insurance?",
                'answer' => "Buy this online policy anytime, anywhere within minutes and get one (1) year validity.",
            ],
            [
                'order' => 3,
                'question' => "What are the eligibility requirements?",
                'answer' => "Please contact our customer service for detailed eligibility information for this product.",
            ],
        ];
    
        // Get content specific to this product or use default if product not found or array is empty
        $contentArray = !empty($productContentMap[$product['name']]) ? $productContentMap[$product['name']] : $defaultContent;
    
        // Loop through the content array and insert each FAQ
        foreach ($contentArray as $content) {
            $faq = [
                'id' => (string) Str::uuid(),
                'parent_id' => $product['id'],
                'question' => $content['question'],
                'answer' => $content['answer'],
                'order' => $content['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
    
            DB::table('faqs')->insert($faq);
        }
    }

    /**
     * Seed flights for travel products with unique content
     */
    // private function seedFlights(array $product): void
    // {
    //     // Only proceed if it's a travel product
    //     if ($product['category'] !== 'Travel') {
    //         return;
    //     }

    //     $flights = [
    //         [
    //             'id' => (string) Str::uuid(),
    //             'parent_id' => $product['id'],
    //             'airline' => 'Philippine Airlines',
    //             'flight_number' => 'PR 123',
    //             'departure' => 'Manila',
    //             'destination' => 'Singapore',
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //         [
    //             'id' => (string) Str::uuid(),
    //             'parent_id' => $product['id'],
    //             'airline' => 'Cebu Pacific',
    //             'flight_number' => 'CEB 456',
    //             'departure' => 'Cebu',
    //             'destination' => 'Tokyo',
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //         [
    //             'id' => (string) Str::uuid(),
    //             'parent_id' => $product['id'],
    //             'airline' => 'AirAsia',
    //             'flight_number' => 'AK 789',
    //             'departure' => 'Clark',
    //             'destination' => 'Kuala Lumpur',
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //         [
    //             'id' => (string) Str::uuid(),
    //             'parent_id' => $product['id'],
    //             'airline' => 'Emirates',
    //             'flight_number' => 'EK 335',
    //             'departure' => 'Manila',
    //             'destination' => 'Dubai',
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ],
    //     ];

    //     DB::table('flights')->insert($flights);
    // }
}
