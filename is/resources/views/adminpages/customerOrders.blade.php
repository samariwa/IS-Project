@extends('admin_main')
@section('title', '| Pending Orders')
@section('content')
     <div class="row">
        <div class="col-md-9">
            <h1>&emsp;Customer Orders</h1>
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
                  	<th>#(Order)</th>
                  	<th>#(Customer)</th>
                  	<th>#(Order Details)</th>
                    <th>Delivery Location</th>
                    <th>Cost</th>
                    <th>Quantity</th>
                    <th></th>
                  </thead>
                  <tbody> 
                  @foreach($orders as $order)         
                    <tr>
                    	<th>{{ $order->id }}</th>
                    	<td>{{ $order->customer_id}}</td> 
                      <td>{{ $order->orderDetails_id }}</td> 
                      <td>{{ $order->delivery_location}}</td>
                      <td>{{ $order->cost }}</td> 
                      <td>{{ $order->quantity }}</td>
                      <form method="POST" action="/postCheck">{{ csrf_field() }}
                    	<td><button  href="/postCheck" name="check" value="1" class="btn btn-light btn-sm">Check</button></td>
                      </form>
                    </tr>
                  @endforeach
                  </tbody>
             </table>
         </div>	
     </div>
@endsection

