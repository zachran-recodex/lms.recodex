<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),    // Using faker for first_name
            'last_name' => fake()->lastName(),      // Using faker for last_name
            'username' => fake()->unique()->userName(),  // Using faker for unique username
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone_number' => fake()->phoneNumber(), // Using faker for phone_number
            'address' => fake()->address(),          // Using faker for address
            'country' => fake()->country(),          // Using faker for country
            'state' => fake()->state(),              // Using faker for state
            'city' => fake()->city(),                // Using faker for city
            'zip_code' => fake()->postcode(),        // Using faker for zip_code
            'office_phone' => fake()->phoneNumber(), // Using faker for office_phone
            'organization' => fake()->company(),     // Using faker for organization
            'profile_picture' => fake()->imageUrl(), // Using faker for profile_picture URL
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
