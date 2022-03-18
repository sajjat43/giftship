<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

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
            'name' => 'sajjat',
            'email' => 'sajjat@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
        ]);
    }
}
