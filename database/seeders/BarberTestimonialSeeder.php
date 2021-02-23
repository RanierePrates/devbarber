<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberTestimonial;
use Illuminate\Database\Seeder;

class BarberTestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::all()->each(function ($barber) {
            $barber->testimonials()->save(BarberTestimonial::factory()->make());
        });
    }
}
