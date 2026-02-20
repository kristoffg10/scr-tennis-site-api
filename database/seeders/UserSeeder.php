<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\UserDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        $role = Role::factory()->create([
            'name'       => 'Client-Admin',
            'identifier' => 'client-admin',
            'type'       => 'client-admin',
        ]);

        $users = [
            [
                'id'                => (string) Str::uuid(),
                'email'             => 'qa_user1@admin.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('QAPass123!'),
                'remember_token'    => Str::random(10),
                'enabled'           => 1,
                'role_id'           => $role->id,
            ],
            [
                'id'                => (string) Str::uuid(),
                'email'             => 'qa_user2@admin.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('QAPass123!'),
                'remember_token'    => Str::random(10),
                'enabled'           => 1,
                'role_id'           => $role->id,
            ]
        ];

        foreach ($users as $userData) {
            $user = User::create($userData);
            if ($userData['email'] === 'qa_user1@admin.com') {
                UserDetail::create([
                    'user_id'        => $user->id,
                    'member_id'      => (string) Str::uuid(),
                    'first_name'     => 'QA',
                    'last_name'      => 'Admin1',
                    'full_name'      => 'QA Admin1',
                    'contact_number' => $faker->phoneNumber,
                    'slug'           => Str::slug($user->name),
                ]);
            } else {
                UserDetail::create([
                    'user_id'        => $user->id,
                    'member_id'      => (string) Str::uuid(),
                    'first_name'     => 'QA',
                    'last_name'      => 'Admin2',
                    'full_name'      => 'QA Admin2',
                    'contact_number' => $faker->phoneNumber,
                    'slug'           => Str::slug($user->name),
                ]);
            }
        }
    }
}
