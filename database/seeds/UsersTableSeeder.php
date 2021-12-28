<?php

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
        DB::table('users')->insert([
            'name' => 'Emy Eriyani',
            'username' => 'emyeri',
            'email' => 'emyeri@gmail.com',
            'password' => Hash::make('userpass2'),
            'roles' => 'USER'
        ]);
    }
}
