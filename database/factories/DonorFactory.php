<?php

namespace Database\Factories;

use App\Models\Donor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'sex' => $this->faker->randomElement(['male', 'female']),
            'age' => $this->faker->numberBetween(1,100),
            'location' => $this->faker->address,
            'phone' => $this->faker->numerify('##########'),
            'blood_group' => $this->faker->randomElement(['O-','A+','B-','O+','A+','B+','AB+', 'AB-',]),
        ];
    }
}
