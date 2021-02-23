<?php

namespace Database\Factories;

use App\Models\BarberService;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarberServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarberService::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $services = [
            'Corte Simples','Corte Degradê', 'Luzes', 'Progressiva'
        ];

        return [
            'name' => $services[array_rand($services)],
            'price' => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
