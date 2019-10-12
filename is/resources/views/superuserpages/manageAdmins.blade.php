@extends('diff_main')
@section('title', '| Manage Admins')
@section('content')
     <div class="row">
        <div class="col-md-10">
            <h1>Administrators</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admins.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing"><i class="fa fa-plus-circle"></i> Add New Admin</a>
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
                  	<th>E-mail</th>
                  	<th>Phone Number</th>
                  	<th></th>
                  </thead>
                  <tbody>
                  	@foreach($admins as $admin )
                    <tr>
                    	<th>{{ $admin->id }}</th>
                    	<td>{{ $admin->name }}</td>
                    	<td>{{ $admin->email }}</td>
                    	<td>{{ $admin->number }}</td>
                    	<td><a href="{{ route('admins.show', $admin->id)}}" class="btn btn-light btn-sm">View</a>&ensp;<a href="{{ route('admins.edit', $admin->id)}}" class="btn btn-light btn-sm"><i class="fa fa-edit"></i>Edit</a></td>
                    </tr>
                  	@endforeach
                  </tbody>
             </table>
         </div>	
     </div>
@endsection