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
        <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">Permissions List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Permission Details</li>
      </ol>
    </nav>
    <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class='bx bx-lock-alt mr-1'></i></i>Permission Details</h4>
                        </div>
                    </div>
            </div>
    <table class="table table-bordered table-sm bg-white">
  
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">Category</th>
      <td scope="col">admin</td>
    </tr>
    <tr>
      <th scope="col">Permissions</th>
      <td scope="col">view_user,edit_user,delete_user,create_order,approve_order</td>
    </tr>
</table>
    </div>
    <style>
    table#example thead tr th{
    background: #253967!important;
  
    }
    .table-row{
      background: #fff!important;
    }
    </style>
@endsection