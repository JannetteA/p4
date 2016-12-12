@extends('master')

@section('title')
	
@section('head')
	
@section('content')
	
	<div class="container">
		
		<div class="formcontent">

			<h2>Add a new clothing item</h2>
			
			<form method="POST" action="/items">
			
				{{ csrf_field() }}

				<div class="form-group">
					<label>Description</label>
					<input
						 type="text"
						 id="description"
						 name="description"
						 value="{{ old('description') }}">

					<div class="error">{{ $errors->first('description') }}</div>
				</div>

				<div class='form-group'>
	            	<label>Brand</label>
	            		<select name='brand_id'>
	               		@foreach($brands_for_dropdown as $brand_id => $brand)
	                    	<option value='{{ $brand_id }}'>{{ $brand }}</option>
	               		@endforeach
	            	</select>
	        	</div>

	       		<div class="form-group">
					<label>Purchased Year (YYYY)</label>
					<input
						 type="text"
						 id="purchased_year"
						 name="purchased_year"
						 value="{{ old('purchased_year') }}">

					<div class="error">{{ $errors->first('purchased_year') }}</div>
				</div>

				<div class="form-group">
					<label>Material</label>
					<input
						 type="text"
						 id="material"
						 name="material"
						 value="{{ old('material') }}">

					<div class="error">{{ $errors->first('material') }}</div>
				</div>

				<div class="form-group">
					<label>Estimated Price</label>
					<input
						 type="text"
						 id="estimated_price"
						 name="estimated_price"
						 value="{{ old('estimated_price') }}">

					<div class="error">{{ $errors->first('estimated_price') }}</div>
				</div>

				<div class="form-group">
					<label>Image Link</label>
					<input
						 type="text"
						 id="image_link"
						 name="image_link"
						 value="{{ old('image_link') }}">

					<div class="error">{{ $errors->first('image_link') }}</div>
				</div>

				<div class='form-group'>
		            <label>Tags</label>
		            @foreach($tags_for_checkboxes as $tag_id => $tag_name)
		                <input type='checkbox' value='{{ $tag_id }}' name='tags[]'> {{ $tag_name }} <br>
		            @endforeach
		        </div>

		        <button type="submit">Add clothing item</button>

				<div class="error">
					@if(count($errors) > 0)              
	                	Please correct the errors above and try again.
	                @endif
	            </div>

			</form>
	    </div>
	</div>

@endsection