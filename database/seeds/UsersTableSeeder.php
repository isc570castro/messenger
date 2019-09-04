<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Alejandro',
        	'email' => 'sistemas@ammmec.com',
        	'password' => bcrypt('Ammmec.2018-')
        ]);

        User::create([
            'name' => 'Haydde Hernandez',
            'email' => 'h_hernandez@ammmec.com',
            'password' => bcrypt('Ammmec.2018-')
        ]);
    }
}
