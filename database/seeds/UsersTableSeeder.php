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
        	'name'=> 'Débora',
            'email'=> 'dguardado@gmail.com',
            'password'=> bcrypt('deby4melissa')
        	]);
    }
}
