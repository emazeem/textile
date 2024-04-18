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
        <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Customer Details</li>
      </ol>
    </nav>
    <table class="table table-bordered table-sm bg-white">
  
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">Department Name</th>
      <td scope="col">Spinning</td>
    </tr>
    <tr>
      <th scope="col">Department Head</th>
      <td scope="col">Ms. Ayesha Khan</td>
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