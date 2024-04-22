@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('ranges.index')}}">Roles List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Roles Details</li>
      </ol>
    </nav>
    <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class="feather icon-user mr-1"></i>Roles Details</h4>
                        </div>
                    </div>
            </div>
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td scope="col">Ajwa textile</td>
    </tr>
    <tr>
      <th scope="col">Fix Range</th>
      <td scope="col">9</td>
    </tr>
    <tr>
      <th scope="col">Minimum Range</th>
      <td scope="col">7</td>
    </tr>
    <tr>
      <th scope="col">Maximum Range</th>
      <td scope="col">12</td>
    </tr>
  </table>
</div>
@endsection
