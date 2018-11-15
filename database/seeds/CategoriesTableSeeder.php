<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Sabun',
            'description' => 'Kategori untuk produk-produk sabun',
        ]);

        DB::table('categories')->insert([
            'name' => 'Shampoo',
            'description' => 'Kategori untuk produk-produk shampoo',
        ]);
    }
}
