<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
	{
	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Kate Spade',
	    'store' => 'Kate Spade',
	    'store_location' => 'International Mall, Tampa',
	     ]);


	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Banana Republic',
	    'store' => 'Banana Republic',
	    'store_location' => 'Millenia Mall, Orlando',
	     ]);


	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Citizens',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);


	}
}
