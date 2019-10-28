<a class="navbar-brand" href="#"><img src="{{url('images/nav.png')}}" height="60" width="155"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
&emsp;&emsp;
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
  
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         @if( Auth::check() )
  <li class="nav-item dropdown" >
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
          {{ Auth::user()->name }}    
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
    </div>
  </li>
      @else
         &emsp;&emsp;&emsp;&emsp;
         <a href="{{ route('login') }}" class="btn btn-light"><i class="fa fa-user" aria-hidden="true"></i>&ensp;Login</a>
      @endif
     
</div>