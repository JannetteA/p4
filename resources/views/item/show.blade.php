@extends('master')

@section('title')

@section('head')
	
@section('content')

	<div class="container">
		<div class="content">
			<div id="itemshow">

			   	<div id=leftboxshow>
					<h2>{{ $item->description }}</h2>	
         			<span>Purchased Year: <em>{{ $item->purchased_year }}</em></span>
         			<span>Price: <em>{{ $item->estimated_price }}</em></span>
         			<span>Material: <em>{{ $item->material }}</em></span>
			   	</div>

			   	<div id=rightboxshow>
				   	<span><img class="imgsizelarge" src='{{ $item->image_link }}' alt="Clothing Item"/></span>
				   	<span><a  href='/items/{{ $item->id }}/edit'>Edit</a></span>
		            <span><a  href='/items/{{ $item->id }}/delete'>Delete</a></span>
			   	</div>
			   	
	   		</div>
		</div>
    </div>

@endsection