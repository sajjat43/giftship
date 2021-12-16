<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')-> insert([
            'name'=>'sajjat',
            'email'=>'sajjat@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
