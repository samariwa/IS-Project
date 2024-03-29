<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel = "icon" href ="http://127.0.0.1:8000/images/titleImage.jpeg" type = "image/x-icon"> 
 <title>Kwanza Tukule @yield('title')</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- Custom styles for this template-->
  {{ Html::style('css/admin.css')}}

</head>

     
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-light sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon ">
        <img src="{{url('images/nav.png')}}" height="60" width="155">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="border-color: black;">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin" style="color: black">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Administrator</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" style="border-color: black;">

      <!-- Heading -->
      <div class="sidebar-heading" style="color: black;">
        Interface
      </div>
      <br>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">&emsp;
        <a style="color: black;" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >
          <i class="fa fa-fw fa-cog"></i>
          <span>Expenses</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Company Expenses:</h6>
            <a class="collapse-item" href="#">Automobile Servicing</a>
            <a class="collapse-item" href="#">Gas Cylinder Purchase</a>
          </div>
        </div>
      </li>
       <br>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">&emsp;
        <a style="color: black;"href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-fw fa-wrench"></i>
          <span>Liabilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Company Liabilities:</h6>
            <a class="collapse-item" href="#">Electricity Bill</a>
            <a class="collapse-item" href="#">Gas Bill</a>
            <a class="collapse-item" href="#">Water Bill</a>
            <a class="collapse-item" href="#">Service Charge</a>
          </div>
        </div>
      </li>
      <br>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">&emsp;
        <a style="color: black;" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-fw fa-folder"></i>
          <span>Staff</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Categories:</h6>
            <a class="collapse-item" href="/deliverers">Deliverers</a>
            <a class="collapse-item" href="/cleaners">Cleaners</a>
            <a class="collapse-item" href="/cooks">Cooks</a>
          </div>
        </div>
      </li>
       <br>
      <!-- Nav Item - Charts -->
      <li class="nav-item">&emsp;
        <a style="color: black;" href="/reports">
          <i class="fa fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
       <br>
      
      <li class="nav-item">&emsp;
        <a style="color: black;" href="#">
          <i class="fa fa-fw fa-table"></i>
          <span>Targets</span></a>
      </li>
        <br>
      <li class="nav-item">&emsp;
        <a style="color: black;" href="/meals">
          <span>Meal packages</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: grey;">
                Notifications<i class="fa fa-bell"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fa fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fa fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fa fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
             <div class="topbar-divider d-none d-sm-block"></div>
             <li class="nav-item dropdown" >
              <a class="nav-link " style="color: grey;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                    {{ Auth::user()->name }}    
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->
                  @include('partials._messages')
                  @yield('content')
          @include('partials._footer')
           <br/><br/>     
           <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSS7SM0cTUAxz7aU72RYGFPi-LJaZ0cUc&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.googlemap/1.5.1/jquery.googlemap.min.js"></script>   
          @include('partials._javascript')
              <!--incase you want to add javascript-->
              @yield('scripts')
      </body>
</html>