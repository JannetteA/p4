<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	    DB::table('items')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'description' => 'Tote Bag Cameron Street Lucie',
	        'brand' => 'Kate Spade',
	        'purchased_year' => 2016,
	        'material' => 'leather',
	        'estimated_price' => 208.00,
	        'image_link' => 'https://www.google.com',
	    ]);

	    DB::table('items')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'description' => 'Straight Jeans',
	        'brand' => 'Citizens of Humanity',
	        'purchased_year' => 2016,
	        'material' => 'denin',
	        'estimated_price' => 178.00,
	        'image_link' => 'https://www.google.com',
	    ]);

    	DB::table('items')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'description' => 'Blouse',
	        'brand' => 'Banana Republic',
	        'purchased_year' => 2015,
	        'material' => 'silk',
	        'estimated_price' => 90.00,
	        'image_link' => 'https://www.google.com',
	    ]);
	}
}
