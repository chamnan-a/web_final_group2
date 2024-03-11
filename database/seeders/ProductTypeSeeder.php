<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'name' => "Drink",
            'detail' => "Drink including ...."
            ], [
                'name' => "Snack",
                'detail' => "Snack including ...."
            ]);
        DB::table('product_types')->insert($data);
    }
}
