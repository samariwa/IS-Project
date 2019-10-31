@extends('main')
@section('title',' | {{ $meal }}')
@section('content')
<br>
        <h1>{{ $meal }}</h1>
        <br>
        <div class="row"> 
        	
                   	<div class="col-md-2">
                    	<b>#</b>
                    </div> 	
                    <div class="col-md-2">
                    	<b>Description</b>
                    </div> 
                    <div class="col-md-2">
                        <b>Unit Price</b>		
                    </div>	
                    <div class="col-md-2">
                        <b>Amount</b>		
                    </div>
                    <div class="col-md-2"> 	
                    	<b>Price</b>
                    </div>	
                   </div>
                   <br>
       <form method="POST" action="/confirmSelect">
        @foreach($ingredients->OrderDetails as $detail )
                   <div class="row">
                   	<div class="col-md-2">
                    	{{ $detail->type_id }}
                    </div>  
                    <div class="col-md-2">
                    	<div class="input-group">
					<input type="checkbox" name="selected" id="check" value="1" required/>&ensp;{{ $detail->order_name }}
					 </div>  	
                    </div> 	
                    <div class="col-md-2"> 	
                    	{{ $detail->selling_price }}
                    </div> 
                    <div class="col-md-2"> 	
                    	<div class="input-group">
					<select class="form-control custom-select" style="width: 10px;"   list="quantity" id="select" disabled="true">
						     <option value="" style="font-family: FontAwesome, Arial; font-style: normal;" > Quantity...</option> 	
					         <option value="1">1</option> 
					         <option value="2">2</option> 
					         <option value="3">3</option> 
					         <option value="4">4</option> 
                             <option value="5">5</option> 
                             <option value="6">6</option> 
                             <option value="7">7</option> 
                             <option value="8">8</option> 
                             <option value="9">9</option> 
                             <option value="10">10</option> 
					     </select>
					 </div>
                    </div>
                    <div class="col-md-2"> 	
                    	
                    </div>
                    </div>	
        @endforeach
        <br><br>
        <h3>Recipe</h3><br>
        @foreach($recipes->recipes as $recipe )
        <div class="row">
        <div class="col-md-5"> 
        	<br>
                    	<h5>Ingredients</h5>
                    	<br>
                          {{ $recipe->ingredients }}
                    	 </div>
          <div class="col-md-1">          	 
          <div class="vertical-line" style="height: 45px;"></div> 
          </div>         	 
          <div class="col-md-5"> 
          <br>         	 
                    	<h5>Method</h5>
                    	<br>
                         {{ $recipe->method }}
                   </div>
                   </div>
        @endforeach           
        <br><br><br>
                  	TOTALS:           	
                  	<br><br><br>
<a class="btn btn-success btn-lg" href="/confirm" role="button">Order</a><br><br><br>
 </form>
 <script>
		document.getElementById('check').onchange=function()
		{
			document.getElementById('select').disabled=!this.checked;
		}
	   </script>
@endsection  