<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class Voucher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voucher')->insert([
            [
                'id' => 1,
                'name' => 'Gift Card IDR 1.000.000',
                'point' => 500000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 2,
                'name' => 'Gift Card IDR 5.00.000',
                'point' => 250000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 3,
                'name' => 'Old Fashion Cake',
                'point' => 100000,
                'type' => 'Products',
            ],
            [
                'id' => 4,
                'name' => 'Gift Card IDR 1.000.000',
                'point' => 500000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 5,
                'name' => 'Gift Card IDR 5.00.000',
                'point' => 250000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 6,
                'name' => 'Old Fashion Cake',
                'point' => 100000,
                'type' => 'Products',
            ],
            [
                'id' => 7,
                'name' => 'Gift Card IDR 1.000.000',
                'point' => 500000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 8,
                'name' => 'Gift Card IDR 5.00.000',
                'point' => 250000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 9,
                'name' => 'Old Fashion Cake',
                'point' => 100000,
                'type' => 'Products',
            ],
            [
                'id' => 10,
                'name' => 'Gift Card IDR 1.000.000',
                'point' => 500000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 11,
                'name' => 'Gift Card IDR 5.00.000',
                'point' => 250000,
                'type' => 'Vouchers',
            ],
            [
                'id' => 12,
                'name' => 'Old Fashion Cake',
                'point' => 100000,
                'type' => 'Products',
            ],
        ]);
    }
}
