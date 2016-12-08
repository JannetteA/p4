@extends('master')

@section('title')

@section('head')
	
@section('content')

	<div class="container">

		<div class="content">
	
			<h1>Confirm deletion</h1>

		    <form method='POST' action='/items/{{ $item->id }}'>

		        {{ method_field('DELETE') }}

		        {{ csrf_field() }}

		        <h2>Are you sure you want to delete <em>{{ $item->description }}</em>?</h2>

		        <input type='submit' value='Yes'>
		        
		    </form>
		    
		</div>

    </div>

@endsection