<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ArticelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // simple methode for fake seed:
        // foreach (range(1, 10) as $item) {
        //     DB::table('articels')->insert([
        //         'title' => "articels $item",
        //         'slug' => "articels-$item",
        //         'body' => "this is articels $item",
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]);
        // }

        //simple methode for fake data in data seed:

        $faker = \Faker\Factory::create();
        foreach (range(1, 10) as $item) {
            DB::table('articels')->insert([
                'title' => $faker->text(50),
                'slug' => $faker->slug(),
                'body' => $faker->paragraph(rand(5, 20)),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
