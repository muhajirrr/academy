<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Citra',
            'description' => 'Sabun Citra',
            'price' => 3000,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Shinzui',
            'description' => 'Sabun Shinzui',
            'price' => 5000,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Lifebuoy',
            'description' => 'Sabun Lifebuoy',
            'price' => 10000,
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Zinc',
            'description' => 'Sabun Zinc',
            'price' => 8000,
        ]);
    }
}
