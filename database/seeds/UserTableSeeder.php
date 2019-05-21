<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // User is the eloquesnt model
        User::create([
            'name'=>'Admin',
            'email'=>'admin@isipathana.lk',
            'role'=>'Admin',
            'password'=>Hash::make('123456'),
        ]);
    }
}
