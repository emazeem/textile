@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('work-orders.index')}}">Work-Order List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Work-Order Details</li>
      </ol>
    </nav>
    <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class='bx bxs-briefcase'></i> Work-Order Details</h4>
                        </div>
                    </div>
            </div>
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">CUSTOMER NAME</th>
      <td scope="col">Acme Apparel Inc.</td>
    </tr>
    <tr>
      <th scope="col">CONTACT NAME</th>
      <td scope="col">Ms. Sarah Jones</td>
    </tr>
    <tr>
      <th scope="col">PO NUMBER</th>
      <td scope="col">AC-2024-0422</td>
    </tr>
  </table>
</div>
@endsection
