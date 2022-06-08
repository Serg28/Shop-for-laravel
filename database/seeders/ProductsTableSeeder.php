<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('ru_RU');

        // Create 50 product records
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->text(50),
                'description' => $faker->paragraph,
                'price' => $faker->randomNumber(5),
                'availability' => $faker->boolean(50),
                'category' => $faker->numberBetween(1, 5),
                'image' => $faker->imageUrl(640,480)
            ]);
        }
    }
}
