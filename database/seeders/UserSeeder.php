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
        DB::table('users')->insert([
            'email' => 'login@login.com',
            'nama_lengkap' => 'login',
            'no_hp' => 'no_hp',
            'password' => Hash::make('login'),
            'level_user' => '0'
        ]);
    }
}
