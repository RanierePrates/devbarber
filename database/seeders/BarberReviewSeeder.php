<?php

namespace Database\Seeders;

use App\Models\Barber;
use App\Models\BarberReview;
use App\Models\User;
use Illuminate\Database\Seeder;

class BarberReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::all()->each(function ($barber) {
            $barber->reviews()->save(BarberReview::factory()->make());
        });


    }
}
