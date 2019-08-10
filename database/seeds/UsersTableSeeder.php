<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;

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
            'name' => 'danilo',
            'email' => 'danilo@gmail.com',
            'password' => Hash::make('132'),
        ]);
    }
}
