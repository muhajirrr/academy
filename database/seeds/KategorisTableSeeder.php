<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'name' => 'Sabun',
            'description' => 'Kategori untuk produk-produk sabun',
        ]);

        DB::table('kategoris')->insert([
            'name' => 'Shampoo',
            'description' => 'Kategori untuk produk-produk shampoo',
        ]);
    }
}
