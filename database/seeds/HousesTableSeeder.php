<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        \App\House::create([
            'house_code' => 1,
            'house_name' => 'Iqbal',
            'color' => 'Blue',
            'tr_id' => 1,
            'st_id' => 1,
        ]);
        */
        DB::table('houses')->insert([
            [
                'house_code' => 1,
                'house_name' => 'Iqbal',
                'color' => 'Blue',
                'tr_id' => 1,
                'st_id' => 1,
            ],
            [
                'house_code' => 2,
                'house_name' => 'Thagor',
                'color' => 'Red',
                'tr_id' => 4,
                'st_id' => 2,
            ],[
                'house_code' => 3,
                'house_name' => 'Milton',
                'color' => 'Black',
                'tr_id' => 2,
                'st_id' => 3,
            ],[
                'house_code' => 4,
                'house_name' => 'Rahula',
                'color' => 'Green',
                'tr_id' => 5,
                'st_id' => 4,
            ]
        ]);
    }
}
