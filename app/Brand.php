<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /*Relationship Methods */
    public function items() {
    	#Brand has many items
    	#Define a one-to-many relationship.
    	return $this->hasMany('App\Item');
    }
}
