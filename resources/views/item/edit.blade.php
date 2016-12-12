@extends('master')

@section('title')

@section('head')
	
@section('content')
	
	<div class="container">
		
		<div class="formcontent">

			<h2>Edit a clothing item</h2>
		
	    	<form method='POST' action='/items/{{ $item->id }}'>

	        	{{ method_field('PUT') }}
	       		{{ csrf_field() }}
				<input name='id' value='{{$item->id}}' type='hidden'>

				<div class="form-group">
					<label>Description</label>
					<input
						 type="text"
						 id="description"
						 name="description"
						 value="{{ old('description',$item->description) }}">

					<div class="error">{{ $errors->first('description') }}</div>
				</div>

				<div class='form-group'>
		            <label>Brand</label>

		            <select name="brand_id">@foreach($brands_for_dropdown as $brand_id => $brand) 
						    <option {{ ($brand_id == $item->brand_id) ? 'SELECTED' : '' }} value='{{ $brand_id }}'>{{ $brand }}</option>
					@endforeach
					</select>
		        </div>


				<div class="form-group">
					<label>Purchased Year (YYYY)</label>
					<input
						 type="text"
						 id="purchased_year"
						 name="purchased_year"
						 value="{{ old('purchased_year',$item->purchased_year) }}">
					
					<div class="error">{{ $errors->first('purchased_year') }}</div>
				</div>

				<div class="form-group">
					<label>Material</label>
					<input
						 type="text"
						 id="material"
						 name="material"
						 value="{{ old('material',$item->material) }}">

					<div class="error">{{ $errors->first('material') }}</div>
				</div>

				<div class="form-group">
					<label>Estimated Price</label>
					<input
						 type="text"
						 id="estimated_price"
						 name="estimated_price"
						 value="{{ old('estimated_price',$item->estimated_price) }}">

					<div class="error">{{ $errors->first('estimated_price') }}</div>
				</div>

				<div class="form-group">
					<label>Image Link</label>
					<input
						 type="text"
						 id="image_link"
						 name="image_link"
						 value="{{ old('image_link',$item->image_link) }}">

					<div class="error">{{ $errors->first('image_link') }}</div>
				</div>

				<div class='form-group'>
		            <label>Tags</label>
		            @foreach( $tags_for_checkboxes as $tag_id => $tag_name) 
		                <input
		                type='checkbox'  value='{{ $tag_id }}'  name='tags[]'
		                {{ (in_array($tag_name, $tags_for_the_item)) ? 'CHECKED' : '' }}
		                >
		                {{ $tag_name }} <br>
		            @endforeach
		        </div>

		        <button type="submit">Edit the clothing item</button>
     
				<div class="error">
					@if(count($errors) > 0)              
	                	Please correct the errors above and try again.
	                @endif
	            </div>

			</form>


			<form action='/items' method="get">
		    	<input type="submit" value="Cancel edit and view all items" 
				 name="Submit" id="submit2" />
			</form>
		
	    </div>
	</div>

@endsection