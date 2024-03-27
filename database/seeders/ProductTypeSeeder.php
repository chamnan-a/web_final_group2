<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "Drink",
                'detail' => "Drink including ...."
            ],
            [
                'name' => "Food",
                'detail' => "Snack including ...."
            ],
            [
                'name' => "Bakery",
                'detail' => "Bakery including ...."
            ]
        ];
        DB::table('product_types')->insert($data);
    }
}
