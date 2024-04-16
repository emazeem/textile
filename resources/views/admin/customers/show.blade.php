@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    @if(Session::has('success'))
        <script>
            $(document).ready(function () {
                swal("Done!", '{{Session('success')}}', "success");
            });
        </script>
    @endif
    <div class="row pb-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">User List</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Details</li>
      </ol>
    </nav>
    <table class="table table-bordered table-sm bg-white">
  
    <tr>
      <th scope="col">First Name</th>
      <td scope="col"></td>
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col"></td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td scope="col"></td>
    </tr>
    <tr>
      <th scope="col">Role</th>
      <td scope="col"></td>
    </tr>
      <td scope="col">
        <a href=""></a>
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="" name="id" id="id">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="file" id="file">
              <label class="custom-file-label" for="file">Choose file</label>
          </div>
          <div class="input-group-append">
            <button class="btn btn-sm btn-primary px-3" type="submit"> <i class="fa fa-upload"></i> Upload CV</button>
          </div>
        </div> 
      </form>
      </td>
    </tr>
</table>
    </div>
    
@endsection