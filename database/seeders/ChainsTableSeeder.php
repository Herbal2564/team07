<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chains')->insert([
            'name'=>'Ethereum',
            'value'=>'543.5',
            'publish'=>20140724,
        ]);
        DB::table('chains')->insert([
            'name'=>'BSC',
            'value'=>'92.4',
            'publish'=>20170726,
        ]);
        DB::table('chains')->insert([
            'name'=>'Polygon',
            'value'=>'14.1',
            'publish'=>20190430,
        ]);
    }
}
