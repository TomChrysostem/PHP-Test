<?php

use Illuminate\Database\Seeder;
use App\Models\CartItem;

class CartItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        CartItem::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            CartItem::create([
                'product_id' => $faker->randomDigit(),
            ]);
        }
    }
}
