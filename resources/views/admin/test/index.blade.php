@extends('admin.layout.master')
@section('content')
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i> Test</h3>
          <a href="{{route('test.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Add Test</a>
        
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
              <th>Lab</th>
              <th>Name</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-row">
              <td>1</td>
              <td>Chemical Lab</td>
              <td>color</td>
              <td>0897465132</td>
              <td>pending</td>
              <td>
                <a href="{{route('test.edit',['id'=>'1'])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="{{route('test.show',['id'=>'1'])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>2</td>
              <td>Chemical Lab</td>
              <td>fadeness</td>
              <td>090224332</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>3</td>
              <td>Chemical Lab</td>
              <td>fastness</td>
              <td>0329443132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>4</td>
              <td>Physical Lab</td>
              <td>flamability</td>
              <td>0323245132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>5</td>
              <td>Wet Lab</td>
              <td>launder</td>
              <td>0232465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>6</td>
              <td>Physical Lab</td>
              <td>perspiration</td>
              <td>0332465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>7</td>
              <td>Chemical Lab</td>
              <td>allergy</td>
              <td>0897465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>8</td>
              <td>Physical Lab</td>
              <td>tensile strength</td>
              <td>0897465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>9</td>
              <td>Physical Lab</td>
              <td>flamability</td>
              <td>0897465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>10</td>
              <td>Wet Lab</td>
              <td>wash effect</td>
              <td>0897465132</td>
              <td>pending</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td colspan="100%" class="text-center">No record found</td>
            </tr>
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


