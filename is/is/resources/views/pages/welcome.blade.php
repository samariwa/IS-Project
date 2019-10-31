@extends('main')
@section('title',' | Homepage')
@section('content')
        
     <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-fixed-item center cat" ><br><br><br><br><br><br><br><br><h1 style="text-align: center; color: black;"><img  src="{{url('images/logo-1.png')}}" width="100px" height="80px"> KWANZA TUKULE</h1><br><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  	<form action="{{url('search')}}"method="POST">{{ csrf_field() }}
       <div class="form-group cat">&emsp;
    <input type="text" name="category_name" class="form-control-lg" required style="border-radius: 20px;width: 1030px;"id="category_name"placeholder="Search food category..." >
    <div id="categoryList" class="positioning">
    </div>
</div>
</form>
  <div class="carousel-inner position">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="{{url('images/slider1.png')}}" alt="First slide">
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="{{url('images/slider2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider3.jpg')}}" alt="Third slide">
    </div>
  </div> 
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<script>
$(document).ready(function(){

 $('#category_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#categoryList').fadeIn();  
                    $('#categoryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#category_name').val($(this).text());  
        $('#categoryList').fadeOut();  
    });  

});
</script>
 <br><br><br><br><br>
<br><br><br><br><br><br><br><br>                
@endsection    