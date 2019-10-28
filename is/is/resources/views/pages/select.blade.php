@extends('main')
@section('title',' | {{ $meal }}')
@section('content')
<br>
        <h1>{{ $meal }}</h1>
        <br>

        @foreach($ingredients as $ingredient )
                   <div class="row"> 
                   	<div class="col-md-4">
                    	{{ $ingredient->id }}
                    </div> 	
                    <div class="col-md-4">
                    	{{ $ingredient->name }}
                    </div> 	
                    <div class="col-md-4"> 	
                    	{{ $ingredient->email }}
                    </div> 	
                   </div>
                  	@endforeach
                  	TOTALS: 
                  	<br><br><br>
<a class="btn btn-success btn-lg" href="/confirmSelect" role="button">Order</a><br><br><br>
@endsection  