<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use Faker\Factory;
use Carbon\Carbon;

class BookSeeder extends Seeder
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
            'Garry Potter. King of rings',
            'Garry Potter. Philosophy stone',
            'PHP User Manual',
            'Blue Dream of all parents',
            'Periodic Inflation',
            'Good light and worm nightmare',
            'We need victory in this war',
            'We got it obviously',
            'Laravel TDD development'
        ];

        for ($i = 0; $i < count($titles); $i++) {

            Book::create([
                'title' => $titles[$i],
                'description' => $faker->sentence(),
                'publisher_id' => mt_rand(1,5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        //seed author_book table
        foreach (Book::all() as $book) {
            $authors = Author::inRandomOrder()->take(rand(1,2))->pluck('id');
            $book->authors()->attach($authors);
        }
    }
}
