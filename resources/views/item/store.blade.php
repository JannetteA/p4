@extends('master')


@section('title')
    Success!
@stop


@section('content')


<div class="container">
		
		<div class="content">

    
		    <p>Success! The new item  <?php echo ($description)?>  was added.
			</p> 
			
			<p>	<a href='/items/create'>Add another clothing item...</a>  </p>

	    </div>


	
    </div>

    


@stop