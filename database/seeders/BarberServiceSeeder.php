<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberService;
use Illuminate\Database\Seeder;

class BarberServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::all()->each(function ($barber) {
            $barber->testimonials()->save(BarberService::factory()->make());
        });
    }
}
