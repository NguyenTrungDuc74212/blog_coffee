<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstname,
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'email'=>$this->faker->unique()->safeEmail,
            'city'=>$this->faker->city,
        ];
    }
}
