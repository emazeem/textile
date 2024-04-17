@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('ranges.index')}}">Ranges List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ranges Details</li>
      </ol>
    </nav>
<!-- <div class="col-12 mb-2">
    <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Test</h3>
    <a href="" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-tasks mr-1"></i>Start</a>
    <a href="" class="btn btn-danger shadow-sm float-right mt-2"><i class="fa fa-tasks mr-1"></i>Complete</a>
    
  </div> -->
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
      <th scope="col">Minimum Range</th>
      <td scope="col">12</td>
    </tr>
    <tr>
      <th scope="col">Maximum Range</th>
      <td scope="col">8</td>
    </tr>
    <tr>
      <th scope="col">Status</th>
      <td scope="col">pending</td>
    </tr>
    <tr>
    <th scope="col">Priority</th>
    <td scope="col">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="prioritySwitch" >
            <label class="custom-control-label" for="prioritySwitch"></label>
        </div>
    </td>
</tr>
<tr>
            <th scope="col">Sub Test</th>
            <td scope="col"> 
              <form action="" method="post">
                @csrf
                <input type="hidden" value="" name="id">
                <div class="input-group mb-3">
                    <input type="text" id="subtest" name="subtest" class="form-control" placeholder="subtest" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Submit</button>
                </div>
            </form>
        </td>
      
    </tr>
    <tr>

      <td colspan="2">
        <a href="" input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" readonly></a>
         <br>
      </td>
    </tr>
  </table>
</div>
@endsection
