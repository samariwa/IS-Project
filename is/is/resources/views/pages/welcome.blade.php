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
  	<form action="{{ url('categories' )}}"method="POST">{{ csrf_field() }}
       <div class="form-group cat">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <select name="categories" class="custom-select custom-select-lg" required style="border-radius: 20px;width: 700px; " onchange="location = this.options[this.selectedIndex].value;" >
      <option  value="" selected>Food Categories...</option>
      @foreach($categories as $category)
      <option value="{{ url('/meals_category/') }}">{{ $category->category_name }}</option>
      @endforeach
    </select>
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
  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<a class="btn btn-success btn-lg" href="/confirm" role="button">Next <i class="fa fa-chevron-right"></i></a><br><br><br><br><br><br><br>


                 
@endsection    