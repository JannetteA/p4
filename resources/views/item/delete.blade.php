@extends('master')

@section('title')

@section('head')
	
@section('content')

	<div class="container">

		<div class="content">
	
			<h2 class="delete">Please Confirm Deletion</h2>

			    <form method='POST' action='/items/{{ $item->id }}'>
			        {{ method_field('DELETE') }}
			        {{ csrf_field() }}
			        <span>Are you sure you want to delete the item "<em>{{ $item->description }}</em>?"</span>
			        <input class="button_space" type='submit' value='Yes'>
			    </form>

		    <div> 
		    	<form action='/items/{{ $item->id }}/edit' method="get">
			    	<input type="submit" value="Cancel deletion and edit item" 
			         name="Submit" id="submit2" />
				</form>
 			</div>

 			<div> 
				<form action='/items' method="get">
			    	<input type="submit" value="Cancel deletion and view all items" 
			         name="Submit" id="submit3" />
				</form>
		    </div>

		</div>
    </div>

@endsection