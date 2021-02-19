<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberPhoto;
use Illuminate\Database\Seeder;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::factory()->count(5)->create()->each(function ($barber) {
            $barber->photos()->save(BarberPhoto::factory()->make());

        });
    }
}
