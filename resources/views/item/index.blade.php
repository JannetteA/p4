@extends('master')

@section('Document this piece')
	
@stop

@section('head')
	
@stop

@section('content')
	

    <div class="container">
        
        <div class="content">

        <section>
            <span>Text could go here </span>

            <!-- The form and error handling starts here -->
            <form method='POST' action='/ipsum'>
            {{ csrf_field() }}
            <input type="text" maxlength="2" name='HowManyParagraphs' value="1">
            <input type='submit' value='Submit'>
            </form>

            @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        </section>
    
        </div>
        
    </div>
    
 

@endsection