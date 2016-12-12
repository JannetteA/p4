<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;
use App\Brand;
use App\Tag;
use Session;
use Carbon;
use DB;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        #The following code will pass the entire collection to the view
        return view('item.index')->with(['items' => $items ]); 
    }

    /**
     * Show the form for creating a new clothing item.
     * @return \Illuminate\Http\Response
     */
    
    public function create() {
       
        # Brand
        $brands = Brand::orderBy('brand_name','ASC')->get();
        $brands_for_dropdown = [];
        foreach($brands as $brand) {
                $brands_for_dropdown[$brand->id] = $brand->brand_name;
        }
       
        #Tags
        $tags = Tag::orderBy('name','ASC')->get();
        $tags_for_checkboxes = [];
        foreach($tags as $tag) {
                $tags_for_checkboxes[$tag->id] = $tag->name;
        }

        # Tag
        return view('item.create')->with([
            'brands_for_dropdown' => $brands_for_dropdown,
            'tags_for_checkboxes' => $tags_for_checkboxes
        ]);
    }


    /**
     * Store a newly created clothing item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        #This is the validation for the form
        $this->validate($request,[
            'description' => 'required|min:3',
            'purchased_year' => 'required|min:4|numeric',
            'estimated_price' => 'required|numeric',
        ]);

        # Brand
        $brands = Brand::orderBy('brand_name','ASC')->get();
        $brands_for_dropdown = [];
        foreach($brands as $brand) {
                $brands_for_dropdown[$brand->id] = $brand->brand_name;
        }
       
        #Tags
        $tags = Tag::orderBy('name','ASC')->get();
        $tags_for_checkboxes = [];
        foreach($tags as $tag) {
                $tags_for_checkboxes[$tag->id] = $tag->name;
        }

        $description = $request->input('description');
        
        $item = new Item();
        $item->description = $request->input('description');
        $item->brand_id = $request->input('brand_id');
        $item->purchased_year = $request->input('purchased_year');
        $item->material = $request->input('material');
        $item->estimated_price = $request->input('estimated_price');

        if($request->input('image_link')=='') {
            $item->image_link = '../../css/notavailable.jpg';
            }
         else {
            $item->image_link = $request->input('image_link');
        }
   
        $item->save();

        # Save Tags
        $tags = ($request->tags) ?: [];
        $item->tags()->sync($tags);
        $item->save();

        Session::flash('flash_message', 'Your item "'.$item->description.'" was added.');
    
        #Display all the items
        return redirect('/items'); 
    }

      
    /**
     * Show the form for editing the clothing item
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);

        # Brand
        $brands = Brand::orderBy('brand_name','ASC')->get();
        $brands_for_dropdown = [];
        foreach($brands as $brand) {
                $brands_for_dropdown[$brand->id] = $brand->brand_name;
        }
       
        #Tags
        $tags = Tag::orderBy('name','ASC')->get();
        $tags_for_checkboxes = [];
        foreach($tags as $tag) {
                $tags_for_checkboxes[$tag->id] = $tag->name;
        }

        #Selecting the tags for the clothing item
        $tags_for_the_item = [];
        foreach ($item->tags as $tag) {
            $tags_for_the_item[] = $tag->name;
        }

        return view('item.edit')->with(
            [
            'item' => $item,
            'brands_for_dropdown' => $brands_for_dropdown,
            'tags_for_checkboxes' => $tags_for_checkboxes,
            'tags_for_the_item' => $tags_for_the_item
            ]
            );
    }

    /**
     * Update the specified clothing item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        #This is the validation for the form
        $this->validate($request,[
            'description' => 'required|min:3',
            'purchased_year' => 'required|min:4|numeric',
            'estimated_price' => 'required|numeric',
        ]);

        $item = Item::find($request->id);

        $item->description     = $request->input('description');
        $item->brand_id        = $request->input('brand_id');
        $item->purchased_year  = $request->input('purchased_year');
        $item->material        = $request->input('material');
        $item->estimated_price = $request->input('estimated_price');

        if($request->input('image_link')=='') {
            $item->image_link = '../../css/notavailable.jpg';
            }
         else {
            $item->image_link = $request->input('image_link');
        }
           
        # If there were tags selected...
        if($request->tags) {
            $tags = $request->tags;
        }
        # If there were no tags selected
        #default to an empty array of tags
        else {
            $tags = [];
        }

        $item->tags()->sync($tags);
        $item->save();

        Session::flash('flash_message', 'Your changes to "'.$item->description.'" were saved.');
    
        #Display all the items
        return redirect('/items');
    }

    /**
     * Remove the specified clothing item from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id) {
        $item = Item::find($id);
        return view('item.delete')->with('item', $item);
    }

    public function destroy($id)
    {
        # Get the item to be deleted
        $item = Item::find($id);
        if(is_null($item)) {
            Session::flash('message','Clothing item not found.');
            return redirect('/items');
        }
        # First remove any tags associated with this item
        if($item->tags()) {
            $item->tags()->detach();
        }
        # Then delete the clothing item
        $item->delete();
        # Finish
        Session::flash('flash_message', $item->description.' was deleted.');
        return redirect('/items');
    }


    /**
     * Display the specified clothing item 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        if(is_null($item)) {
            Session::flash('message','Item not found');
            return redirect('/items');
        }
        return view('item.show')->with([
            'item' => $item,
        ]);
    }
};