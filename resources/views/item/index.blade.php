@extends('master')

@section('title')

@section('head')
	
@section('content')
	
	<div class="container">
		
		<div class="content">

		<h1>All the clothing items</h1>

			@foreach($items as $item)

	           	<a href="/items/{{ $item->id }}"><h3 class="truncate">{{ $item->description }}</h3></a>

	           
	                <a class='button' href='/items/{{ $item->id }}/edit'>Edit</a>
	                <a class='button' href='/items/{{ $item->id }}'>View</a>
	                <a class='button' href='/items/{{ $item->id }}/delete'>Delete</a>

	         @endforeach
	   

	    </div>
	
    </div>

@endsection