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
        DB::table('coins')->insert([
            'name'=>'Sushi',
            'cid'=>1,
            'kind'=>'DEX',
            'lockup'=>6.7,
            'highest'=>46,
            'lowest'=>0.55,
            'publish'=>20200829,

        ]);
        DB::table('coins')->insert([
            'name'=>'Maker',
            'cid'=>1,
            'kind'=>'借貸',
            'lockup'=>17.3,
            'highest'=>6598,
            'lowest'=>429,
            'publish'=>20170130,

        ]);
        DB::table('coins')->insert([
        'name'=>'Curve',
        'cid'=>1,
        'kind'=>'DEX',
        'lockup'=>16.9,
        'highest'=>56,
        'lowest'=>0.31,
        'publish'=>20200814,

        ]);
        DB::table('coins')->insert([
            'name'=>'Compound',
            'cid'=>1,
            'kind'=>'借貸',
            'lockup'=>12.7,
            'highest'=>928,
            'lowest'=>78,
            'publish'=>20200616,

        ]);
        DB::table('coins')->insert([
        'name'=>'Aave',
        'cid'=>1,
        'kind'=>'借貸',
        'lockup'=>11.1,
        'highest'=>707,
        'lowest'=>0.3,
        'publish'=>20201003,

        ]);
        DB::table('coins')->insert([
            'name'=>'Venus',
            'cid'=>2,
            'kind'=>'借貸',
            'lockup'=>2.3,
            'highest'=>154,
            'lowest'=>1.2,
            'publish'=>20201006,

        ]);
        DB::table('coins')->insert([
            'name'=>'Tranchess',
            'cid'=>2,
            'kind'=>'資產管理',
            'lockup'=>1.6,
            'highest'=>9.1,
            'lowest'=>2.6,
            'publish'=>20200712,

        ]);
        DB::table('coins')->insert([
            'name'=>'Qubit',
            'cid'=>2,
            'kind'=>'借貸',
            'lockup'=>2.3,
            'highest'=>0.58,
            'lowest'=>0.01,
            'publish'=>20210826,

        ]);
        DB::table('coins')->insert([
            'name'=>'MDEX',
            'cid'=>2,
            'kind'=>'DEX',
            'lockup'=>0.9157,
            'highest'=>10,
            'lowest'=>0.8,
            'publish'=>20210119,

        ]);
        DB::table('coins')->insert([
            'name'=>'DODO',
            'cid'=>2,
            'kind'=>'DEX',
            'lockup'=>0.086,
            'highest'=>86,
            'lowest'=>0.14,
            'publish'=>20200929,

        ]);
        DB::table('coins')->insert([
            'name'=>'CAKE',
            'cid'=>2,
            'kind'=>'DEX',
            'lockup'=>12.6,
            'highest'=>44,
            'lowest'=>0.19,
            'publish'=>20200918,

        ]);
        DB::table('coins')->insert([
            'name'=>'Ape',
            'cid'=>2,
            'kind'=>'DEX',
            'lockup'=>0.44,
            'highest'=>1.35,
            'lowest'=>0.0001,
            'publish'=>20210317,

        ]);
        DB::table('coins')->insert([
            'name'=>'Bake',
            'cid'=>2,
            'kind'=>'DEX',
            'lockup'=>07407,
            'highest'=>8.47,
            'lowest'=>0.0017,
            'publish'=>20200924,

        ]);
        DB::table('coins')->insert([
            'name'=>'Quick',
            'cid'=>3,
            'kind'=>'DEX',
            'lockup'=>0.9206,
            'highest'=>1894,
            'lowest'=>77,
            'publish'=>20210224,

        ]);
        DB::table('coins')->insert([
            'name'=>'Balancer',
            'cid'=>3,
            'kind'=>'DEX',
            'lockup'=>0.0922,
            'highest'=>74,
            'lowest'=>3,
            'publish'=>20200623,

        ]);
        DB::table('coins')->insert([
            'name'=>'MATIC',
            'cid'=>3,
            'kind'=>'代幣',
            'lockup'=>4.2,
            'highest'=>2.6,
            'lowest'=>0.003,
            'publish'=>20190430,

        ]);
        DB::table('coins')->insert([
            'name'=>'Klima',
            'cid'=>3,
            'kind'=>'代幣',
            'lockup'=>0.8481,
            'highest'=>0.3,
            'lowest'=>0.004,
            'publish'=>20190619,

        ]);
        DB::table('coins')->insert([
            'name'=>'Dino',
            'cid'=>3,
            'kind'=>'DEX',
            'lockup'=>0.1046,
            'highest'=>0.17,
            'lowest'=>0.14,
            'publish'=>20210322,

        ]);
        DB::table('coins')->insert([
            'name'=>'Dfyn',
            'cid'=>3,
            'kind'=>'DEX',
            'lockup'=>01304,
            'highest'=>29,
            'lowest'=>0.4,
            'publish'=>20210510,

        ]);





    }
}
