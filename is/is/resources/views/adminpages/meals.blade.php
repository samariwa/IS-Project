@extends('admin_main')
@section('title', '| Meal Packages')
@section('content')
     <div class="row">
        <div class="col-md-9">
            <h1>&emsp;Meal Packages</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('meals.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"><i class="fa fa-plus-circle"></i> Add New Package</a>
        </div>
        <div class="col-md-12">	
            <hr>
        </div>    
     </div>
     <!--end of row-->
     <div class="row">
         <div class="col-md-12">
             <table class="table table-striped">
                  <thead>
                  	<th>#</th>
                  	<th>Name</th>
                  	<th></th>
                  </thead>
                  <tbody>
                  	@foreach($meals as $meal )           
                    <tr>
                    	<th>{{ $meal->id }}</th>
                    	<td>{{ $meal->meal_name }}</td> 
                    	<td><a href="{{ route('meals.show', $meal->id)}}" class="btn btn-light btn-sm">View</a>&ensp;<a href="{{ route('meals.edit', $meal->id)}}" class="btn btn-light btn-sm"><i class="fa fa-edit"></i>Edit</a></td>
                    </tr>
                  	@endforeach
                  </tbody>
             </table>
         </div>	
     </div>
@endsection