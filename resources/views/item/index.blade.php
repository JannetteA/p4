@extends('master')

@section('title')

@section('head')
	
@section('content')
	
	<div class="container">
		<div class="content">

			<h3>What&apos;s in my closet?</h3>
				 
				@foreach($items as $item)
				  
				   	<div class="item">

					   	<div class="leftbox">
					   		<img class="imgsizesmall" src='{{ $item->image_link }}' alt="Clothing Item"/>
					   	</div>

					   	<div class="rightbox">
	             			<h2>{{ $item->description }}</h2>	           		
			           		<a class='index' href='/items/{{ $item->id }}'>View Details</a>
			           		<a class='index' href='/items/{{ $item->id }}/edit'>Edit</a>
			                <a class='index' href='/items/{{ $item->id }}/delete'>Delete</a>
					   	</div>

	   				</div>

		        @endforeach
		</div>
    </div>

@endsection