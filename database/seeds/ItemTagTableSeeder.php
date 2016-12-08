<?php

use Illuminate\Database\Seeder;

use App\Item;
use App\Tag;

class ItemTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{

	    # First, create an array of all the items we want to associate tags with
	    # The *key* will be the item description, and the *value* will be an array of tags.
	    $items =[
	        'Straight Jeans' => ['casual','eveningwear'],
	        'Handbag' => ['casual','business'],
	        'Long Jacket' => ['casual','business']
	    ];

	    # Now loop through the above array, creating a new pivot for each item to tag
	    foreach($items as $description => $tags) {

	        # First get the item
	        $item = Item::where('description','like',$description)->first();

	        # Now loop through each tag for this item, adding the pivot
	        foreach($tags as $tagName) {
	            $tag = Tag::where('name','LIKE',$tagName)->first();

	            # Connect this tag to this item
	            $item->tags()->save($tag);
	        }

	    }
	}
}
