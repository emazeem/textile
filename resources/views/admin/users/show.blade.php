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
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">User List</a></li>
        <li class="breadcrumb-item active" aria-current="page">User Details</li>
      </ol>
    </nav>
    <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class="feather icon-user mr-1"></i>User Details</h4>
                        </div>
                    </div>
            </div>
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">First Name</th>
      <td scope="col">{{$show->fname}}</td>
    </tr>
    <tr>
      <th scope="col">Last Name</th>
      <td scope="col">{{$show->lname}}</td>
    </tr>
    <tr>
      <th scope="col">Email</th>
      <td scope="col">{{$show->email}}</td>
    </tr>
    <tr>
      <th scope="col">Role</th>
      <td scope="col">{{$show->roles->name}}</td>
    </tr>
    <tr>
      <th scope="col">Date of joining</th>
      <td scope="col">{{$show->joining}}</td>
    </tr>
    <tr>
      <th scope="col">Designation</th>
      <td scope="col">{{$show->designation}}</td>
    </tr>
    <tr>
      <th scope="col">Department</th>
      <td scope="col">{{$show->department}}</td>
    </tr>
</table>
    </div>
    
@endsection