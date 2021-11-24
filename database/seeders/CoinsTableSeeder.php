<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('coins')->insert([
            'name'=>'UNI',
            'cid'=>1,
            'kind'=>'DEX',
            'lockup'=>13.2,
            'highest'=>48,
            'lowest'=>0.05,
            'publish'=>20200917,

        ]);




    }
}
