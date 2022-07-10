<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username' => 'Iris',
            'password' => 'haribaning789',
        ]);
        DB::table('admin')->insert([
            'username' => 'admin',
            'password' => 'admin123',
        ]);
    }
}
