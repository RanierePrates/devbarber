<?php

namespace Database\Factories;

use App\Models\BarberReview;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarberReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarberReview::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'rate' => $this->faker->randomFloat(2, 0, 5),
        ];
    }
}
