@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('tests.index')}}">Test List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Test Details</li>
      </ol>
    </nav>
<!-- <div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Test</h3>
    <a href="" class="btn btn-primary shadow-sm float-right mt-2 ml-1"><i class="fa fa-tasks mr-1"></i>Start</a>
    <a href="" class="btn btn-danger shadow-sm float-right mt-2"><i class="fa fa-tasks mr-1"></i>Complete</a>
    
  </div> -->
    <table class="table table-bordered table-sm bg-white">
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">Lab</th>
      <td scope="col">chemical lab</td>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td scope="col">color</td>
    </tr>
    <tr>
      <th scope="col">Description</th>
      <td scope="col">chemical solidatity</td>
    </tr>
  </table>
</div>
@endsection
