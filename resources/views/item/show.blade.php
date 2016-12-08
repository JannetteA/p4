@extends('master')

@section('title')

@section('head')
	
@section('content')

	
	<div class="container">
		
		<div class="content">

				<h1>{{ $item->description }}</h1>
				
				<!-- need to get brand  -->


				<img src='{{ $item->image_link }}'>

				<div >
			        @foreach($item->tags as $tag)
			            <div>{{ $tag->name }}</div>
			        @endforeach
			    </div>

			    <a class='button' href='/items/{{ $item->id }}/edit'>Edit</a>
			    <a class='button' href='/items/{{ $item->id }}/delete'>Delete</a>

			    <br><br>
			    <a class='return' href='/items'>&larr; Return to all items</a>

			    			    

	    </div>
	
    </div>

@endsection