<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('123456')
        ]);
        $client->assignRole('admin');

        $client = User::create([
            'name' => 'client',
            'email' => 'client@gmail.com', 
            'password' => bcrypt('123456')
        ]);
        $client->assignRole('client');

        return true;
    }
}
