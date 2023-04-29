<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class PlatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //\App\Models\Plat::factory(10)->create();

    DB::table('plats')->insert([

        [
            'name' => 'To',
            'price'=> '750',
            'photo' => 'photo1',
        ],

        [
            'name' => 'riz graine',
            'price'=> '1500',
            'photo' => 'photo1',
        ],

        [
            'name' => 'haricots',
            'price'=> '500',
            'photo' => 'photo1',
        ],

        [
            'name' => 'riz',
            'price'=> '500',
            'photo' => 'photo1',
        ],

        [
            'name' => 'riz',
            'price'=> '500',
            'photo' => 'photo1',
        ],

    ]);

    }
}
