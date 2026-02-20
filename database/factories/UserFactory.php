<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    public function definition(): array
    {
        return [
            'id'                => (string) Str::uuid(),
            'email'             => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('AdminPass123!'),
            'remember_token'    => Str::random(10),
            'enabled'           => 1,
            'role_id'           => Role::factory()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            UserDetail::create([
                'user_id'           => $user->id,
                'member_id'         => Str::uuid(),
                'first_name'        => 'Admin',
                'last_name'         => 'SLMC',
                'full_name'         => 'Admin SLMC',
                'contact_number'    => $this->faker->phoneNumber(),
                'slug'              => Str::slug($user->name)
            ]);
        });
    }

    public function unverified()
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
