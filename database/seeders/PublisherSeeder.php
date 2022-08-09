<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;
use Faker\Factory;
use Carbon\Carbon;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $titles = [
            'Bookraine Publishing House',
            'Best Publishing Co',
            'Main Publish Manufacture',
            'Ultra Publishing & colorize',
            'Darvin Publishing Factory'
        ];

        for ($i = 0; $i < count($titles); $i++) {

            Publisher::create([
                'title' => $titles[$i],
                'description' => $faker->sentence(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
