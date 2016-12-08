@extends('master')

@section('title')
	
@section('head')
	
@section('content')
	
	<div class="container">
		
		<div class="content">


		<h1>All the clothing items</h1>


	        <div id='items' class='cf'>
	            @foreach($items as $item)

	                <section class='item'>
	                    <a href='/items/{{ $item->id }}'><h2 class='truncate'>{{ $item->description }}</h2></a>

	                    <h3 class='truncate'>{{ $item->brand->brand_name }} </h3>

	                    <a href='/items/{{ $item->id }}'><img class='cover' src='{{ $item->image_link }}' ></a>

	                    <div class='tags'>
	                        @foreach($item->tags as $tag)
	                            <div class='tag'>{{ $tag->name }}</div>
	                        @endforeach
	                    </div>

	                    <a class='button' href='/items/{{ $item->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
	                    <a class='button' href='/items/{{ $item->id }}'><i class='fa fa-eye'></i> View</a>
	                    <a class='button' href='/items/{{ $item->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
	                </section>

	                
	            @endforeach
	        </div>
   	

	    <!--@if(sizeof($items) == 0)
	        You have not added any clothing items, you can <a href='/items/create'>add a clothing item now to get started</a>.
	    @else
	        <div id='items' class='cf'>
	            @foreach($items as $item)

	                <section class='item'>
	                    <a href='/items/{{ $item->id }}'><h2 class='truncate'>{{ $item->description }}</h2></a>

	                    <h3 class='truncate'>{{ $item->brand->brand_name }} </h3>

	                    <a href='/items/{{ $item->id }}'><img class='cover' src='{{ $item->image_link }}' ></a>

	                    <div class='tags'>
	                        @foreach($item->tags as $tag)
	                            <div class='tag'>{{ $tag->name }}</div>
	                        @endforeach
	                    </div>

	                    <a class='button' href='/items/{{ $item->id }}/edit'><i class='fa fa-pencil'></i> Edit</a>
	                    <a class='button' href='/items/{{ $item->id }}'><i class='fa fa-eye'></i> View</a>
	                    <a class='button' href='/items/{{ $item->id }}/delete'><i class='fa fa-trash'></i> Delete</a>
	                </section>
	            @endforeach
	        </div>
   		 @endif	-->

		
		<!--@foreach($items as $item)
		<p>{{ $item->description }}</p>
		<p><img class="itemimgsize" src="{{ $item->image_link }}"></p>
		@endforeach-->



	    </div>
	
    </div>

@stop