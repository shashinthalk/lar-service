<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => $this->faker->postcode,
            'country' => $this->faker->country,
            'website' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'twitter' => $this->faker->url,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'youtube' => $this->faker->url,
            'tiktok' => $this->faker->url,
            'pinterest' => $this->faker->url,
            'github' => $this->faker->url,
            'gitlab' => $this->faker->url,
            'bitbucket' => $this->faker->url,
        ];
    }
}
