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


	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Other',
	    'store' => 'Other',
	    'store_location' => 'Other',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => '7 For All Mankind',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Ann Taylor',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Bettye Muller',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Cole Haan',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Frye',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Via Spiga',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Aqua',
	    'store' => 'Bloomingdales',
	    'store_location' => 'Milenia Mall, Orlando',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Free People',
	    'store' => 'Free People',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'J.Crew',
	    'store' => 'J.Crew',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Joes',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Karen Miller',
	    'store' => 'Bloomingdales',
	    'store_location' => 'Milenia Mall, Orlando',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Max Mara',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Theory',
	    'store' => 'Neiman Marcus',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Hudson',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	     ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Nicole Miller',
	    'store' => 'Nordstrom',
	    'store_location' => 'International Mall, Tampa',
	    ]);

	    DB::table('brands')->insert([
	    'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	    'brand_name' => 'Altheta',
	    'store' => 'Altheta',
	    'store_location' => 'International Mall, Tampa',
	     ]);


	}
}
