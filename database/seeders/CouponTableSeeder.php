<?php

namespace Database\Seeders;


use App\Models\Coupon;
use Illuminate\Database\Seeder;

class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'=>'ac12',
            'type'=> 'fixed',
            'value' => '30',
        ]);
        Coupon::create([
            'code'=>'ab12',
            'type'=> 'fixed',
            'value' => '40',
        ]);
        Coupon::create([
            'code'=>'ad12',
            'type'=> 'fixed',
            'value' => '130',
        ]);
    }
}
