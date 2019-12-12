<!doctype html>
    <html lang="en">
    <head>
        @include('partials._head')
    </head>
      <body>
          <!--Bootstrap navbar-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light sticky" >
             @include('partials._bloggerNav')
          </nav>
          <br/>
              <div class="container">
                  @include('partials._messages')
                  @yield('content')
          @include('partials._footer')
           </div> <!--end of container row-->
           <br/><br/>        
          @include('partials._javascript')
              <!--incase you want to add javascript-->
              @yield('scripts')
      </body>
</html>