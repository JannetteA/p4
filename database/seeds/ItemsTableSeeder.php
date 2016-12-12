<?php

use Illuminate\Database\Seeder;
use App\Brand;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $brand_id = Brand::where('brand_name','=','Citizens')->pluck('id')->first();

        DB::table('items')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'description' => 'Straight Jeans',
        'brand_id' => $brand_id,
        'purchased_year' => 2016,
        'material' => 'denin',
        'estimated_price' => 178.00,
        'image_link' => 'https://www.citizensofhumanity.com/media/catalog/product/cache/1/small_image/400x627/9df78eab33525d08d6e5fb8d27136e95/e/m/emmanuelle-slim-boot_ozone-rinse_1_1.jpg',
        ]);

        $brand_id = Brand::where('brand_name','=','Kate Spade')->pluck('id')->first();

        DB::table('items')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'description' => 'Handbag',
        'brand_id' => $brand_id,
        'purchased_year' => 2016,
        'material' => 'leather',
        'estimated_price' => 298.00,
        'image_link' => 'http://www.katespade-handbags.eu.com/images/KS6/Kate%20Spade%20New%20York%20Cobble%20Hill%20Tenley%20Crossbody%20Leather%20Bag%20Red.jpg',
        ]);

        $brand_id = Brand::where('brand_name','=','Banana Republic')->pluck('id')->first();

        DB::table('items')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'description' => 'Long Jacket',
        'brand_id' => $brand_id,
        'purchased_year' => 2016,
        'material' => 'wool',
        'estimated_price' => 190.00,
        'image_link' => 'http://www3.assets-gap.com/webcontent/0012/525/626/cn12525626.jpg',
        ]);
    }
}
