<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        return [
            'id'            => Str::uuid(),
            // 'name'          => $this->faker->randomElement(['Admin', 'Client', 'Client-Admin', 'Customer', 'Specialist']),
            'name'          => 'Client-Admin',
            // 'identifier'    => $this->faker->slug(),
            'identifier'    => 'client-admin',
            // 'type'          => $this->faker->randomElement(['admin', 'client', 'client-admin', 'customer', 'specialist']),
            'type'          => 'client-admin',
            'permissions'   => json_encode([]), // Adjust permissions as needed
        ];
    }
}
