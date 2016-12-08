<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /*Relationship Methods */
    public function author() {
    	#Book belongs to author
    	#Define an inverse one-to-many relationship.
    	return $this->belongsTo('App\Brand');
    }   

	public function tags()
	{
	    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
	    return $this->belongsToMany('App\Tag')->withTimestamps();
	}

}
