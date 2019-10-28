@extends('admin_main')
@section('title',' | Cooks')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Cooks</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Total number:38</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Duty</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Staff ID Number</th>
                      <th>Duty</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Agnes Kabuchi</td>
                      <td>2736</td>
                      <td>Boiling beans</td>
                      <td>26</td>
                      <td>Female</td>
                      <td>20,800</td>
                    </tr>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>2736</td>
                      <td>Carrots Slicing</td>
                      <td>61</td>
                      <td>Male</td>
                      <td>32,800</td>
                    </tr>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>2736</td>
                      <td>Carrots Slicing</td>
                      <td>61</td>
                      <td>Male</td>
                      <td>32,800</td>
                    </tr>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>2736</td>
                      <td>Carrots Slicing</td>
                      <td>61</td>
                      <td>Male</td>
                      <td>32,800</td>
                    </tr>
    
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  @endsection