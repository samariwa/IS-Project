@extends('main')
@section('title',' | {{ $category->category_name }}')
@section('content')
<br>
<h1>{{ $category->category_name }}</h1>
<br>
<div class="row">
         <div class="col-md-12">
             <table class="table table-striped">
                  <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                  </thead>
                  <tbody>
                    @foreach($category->meals as $meal)
                    <tr>
                      <th>{{ $meal->id }}</th>
                      <td>{{ $meal->meal_name }}</td>
                      <td><a href="/mealsSelect" class="btn btn-light btn-sm">Select</a>
                    </tr>
                    @endforeach
                  </tbody>
             </table>
         </div> 
     </div>
@endsection    