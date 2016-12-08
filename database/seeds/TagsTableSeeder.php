<?php

use Illuminate\Database\Seeder;

use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
	    $data = ['casual','business','activewear','eveningwear','shoes','accessories'];

	    foreach($data as $tagName) {
	        $tag = new Tag();
	        $tag->name = $tagName;
	        $tag->save();
	    }
	}
}
