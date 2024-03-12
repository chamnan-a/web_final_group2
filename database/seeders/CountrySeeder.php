<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['zip_code'=>'12000','name'=>'CAMBODIA','description'=>'Cambodia ....'],
            ['zip_code'=>'13000','name'=>'Vietnam','description'=>'Vietnam ....'],
            ['zip_code'=>'14000','name'=>'Thai','description'=>'Thai ....'],
        );
        DB::table('countries')->insert($data);
    }
}
