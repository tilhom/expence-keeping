<?php

use Illuminate\Database\Seeder;

class CountryZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data =
    	[
    		[
    			'country_id' =>240,
    			'code' =>"AN",
    			'name' =>"Andijon"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"BU",
    			'name' =>"Bukhoro"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"FA",
    			'name' =>"Farg'ona"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"JI",
    			'name' =>"Jizzax"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"KH",
    			'name' =>"Khorazm"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"NG",
    			'name' =>"Namangan"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"NW",
    			'name' =>"Nawoiy"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"QA",
    			'name' =>"Qashqadaryo"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"QR",
    			'name' =>"Qoraqalpog'iston Respublikasi"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"SA",
    			'name' =>"Samarqand"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"SI",
    			'name' =>"Sirdaryo"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"SU",
    			'name' =>"Surkhondaryo"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"TK",
    			'name' =>"Toshkent"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"TO",
    			'name' =>"Toshkent"
    		],
    		[
    			'country_id' =>240,
    			'code' =>"XO",
    			'name' =>"Xorazm"
    		],
    	];
    	DB::table('country_zones')->insert($data);
    }
}
