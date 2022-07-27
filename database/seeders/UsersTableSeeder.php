<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'username' => 'Iris',
            'password' => 'haribaning789',
        ]);
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => 'admin123',
        ]);
    }
}
