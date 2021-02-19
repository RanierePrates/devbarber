<?php

namespace Database\Factories;

use App\Models\BarberPhoto;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarberPhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarberPhoto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->imageUrl()
        ];
    }
}
