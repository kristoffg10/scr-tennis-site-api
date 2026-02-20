<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Seeds submission_type taxonomies for the Email Recipients module.
     */
    public function up(): void
    {
        $taxonomies = [
            ['id' => '0b2965f4-35d0-4d9d-b403-c33d6d59f01d', 'name' => 'Hospital Accreditation', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => '0f9d4985-f032-483c-b2fd-a162b59b6f4f', 'name' => 'Request for Proposal', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => '3f752afc-1ba8-4977-82e2-154651700e67', 'name' => 'Doctor Accreditation', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => 'c02fb021-f764-439b-9275-1fc60b637d12', 'name' => 'Agent Accreditation', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => 'cdc5f2c3-8d2b-40fe-a351-5b51a642aa27', 'name' => 'Career Application', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => 'ddd15a10-da70-4335-9af3-c0234511ce35', 'name' => 'Contact Us Inquiry', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
            ['id' => 'fde7251c-f7f5-4c91-8824-c812a4854148', 'name' => 'Clinic Accreditation', 'type' => 'submission_type', 'email_recipients' => json_encode(['marjoevelasco.dbmanila@gmail.com'])],
        ];

        foreach ($taxonomies as $taxonomy) {
            if (!DB::table('taxonomies')->where('id', $taxonomy['id'])->exists()) {
                DB::table('taxonomies')->insert(array_merge($taxonomy, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('taxonomies')->where('type', 'submission_type')->delete();
    }
};
