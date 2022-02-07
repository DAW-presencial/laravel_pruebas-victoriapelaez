<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
            [
                [
                    'name' => 'super',
                    'email' => 'super@gmail.com',
                    'password' => Hash::make('12341234'),
                    'role' => 'super'],
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('12341234'),
                    'role' => 'admin'],
                [
                    'name' => 'invitado',
                    'email' => 'invitado@gmail.com',
                    'password' => Hash::make('12341234'),
                    'role' => 'invitado']

            ];
        DB::table('users')->insert($user);
    }
}
