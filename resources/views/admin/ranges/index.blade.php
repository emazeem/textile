@extends('admin.layout.master')
@section('content')
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
  <div class="row">
    <div class="col-12 mb-2">
      <h3 class="float-left pb-1 font-weight-light"><i class='bx bx-ruler'></i> Ranges</h3>
      <a href="{{route('ranges.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Add Ranges</a>
    </div>
    <!--Search bar-->
      <div class="row"></div>
      <div class="col-12 mb-2 mt-2">
        <form action="" class="col-4 float-right">
          <div class="input-group-append">
            <input type="search" name="search" id="" class="form-control rounded-lg" placeholder="Search..." value="" />
            <button class="btn btn-primary rounded-lg toggle-button px-3"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
      <!--users table-->
      <div class="col-lg-12 table-responsive mt-2">
        <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
          <thead >
            <tr class="bg-c-blue">
              <th>ID</th>
              <th>Name</th>
              <th>Minimum Range</th>
              <th>Maximum Range</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach(getRanges() as $range)
            <tr class="table-row">
              <td>{{$range['id']}}</td>
              <td>{{$range['Name']}}</td>
              <td>{{$range['Minimum Range']}}</td>
              <td>{{$range['Maximum Range']}}</td>
              <td class="text-center">
                <a href="{{route('ranges.edit',['id'=>'1'])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="{{route('ranges.show',['id'=>'1'])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row float-right mt-2 mr-0">
        </div>
      </div>
    </div> 
    
    <style>
    table#example thead tr th{
    background: #233560!important;
  
    }
    .table-row{
      background: #fff!important;
    }
    </style>
@endsection


