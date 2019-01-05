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
        $user = new User();
        $user->name  = 'minh tu';
        $user->email = 'minhtu210894@gmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
    }
}
