<?php

namespace Database\Factories;

use App\Models\BarberTestimonial;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarberTestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarberTestimonial::class;

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
            'body' => $this->faker->paragraph()
        ];
    }
}
