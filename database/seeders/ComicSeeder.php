<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $comic = new Comic;

            $comic->title = $faker->word();
            $comic->description = $faker->paragraph(1, true);
            $comic->thumb = $faker->imageUrl(640, 480, 'demetrio', true);
            $comic->price = $faker->randomFloat(2, 10, 20);
            $comic->series = $faker->word();
            $comic->sale_date = $faker->date();
            $comic->type = $faker->randomElement(['graphic novel', 'comic book']);

            $comic->save();
        }
    }
}
