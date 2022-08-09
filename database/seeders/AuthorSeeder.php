<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use Faker\Factory;
use Carbon\Carbon;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $names = [
            'Amie Kaufman', 'Meagan Spooner', 'Vinit Karnik', 'Rajnath Singh', 'Roger Faligot'
        ];

        for ($i = 0; $i < count($names); $i++) {

            Author::create([
                'name' => $names[$i],
                'description' => $faker->sentence(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
