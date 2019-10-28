@extends('diff_main')
@section('title',' | Superuser')
@section('content')
     <ul class="cb-slideshowAdmin">
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <li><span></span><div></div></li>
            <br><br><br><br><br><br><br><br><br>
     <div class="form-group">
    <select class="custom-select" required style="border-radius: 20px;" onchange="location = this.options[this.selectedIndex].value;" >
      <option value="" selected>Select Action to Perform</option>
      <option value="/manageAdmins">Manage Administrators</option>
      <option value="/manageBloggers">Manage Bloggers</option>
    </select>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
</ul>
<br>
@endsection  