@extends('master')

@section('title')
	
@section('head')
	
@section('content')
	
	<div class="container">
		
		<div class="content">

		
		<form method='POST' action='/items'>

		
			{{ csrf_field() }}

			Description:  <input type='text' name='description' value='{{ old('description') }}'>


			<input type='submit' value='Add a new clothing item'>


			@if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif




		</form>

	    </div>
	
    </div>

@endsection