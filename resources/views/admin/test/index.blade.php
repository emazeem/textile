@extends('admin.layout.master')
@section('content')
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users"></i> Personnel</h3>
          <a href="" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Users</a>
        
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
              <th>Description</th>
              <th>Standard</th>
              <th>type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-row">
              <td>1</td>
              <td>bill Gates</td>
              <td>billygate@outlook.com</td>
              <td>0897465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>2</td>
              <td>Gold Smith</td>
              <td>Smith@outlook.com</td>
              <td>090224332</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>3</td>
              <td>kyle jamie</td>
              <td>jamie@outlook.com</td>
              <td>0329443132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>4</td>
              <td>harry carter</td>
              <td>harry@outlook.com</td>
              <td>0323245132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>5</td>
              <td>mike bowden</td>
              <td>mike@outlook.com</td>
              <td>0232465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>6</td>
              <td>katrina kayden</td>
              <td>kate@outlook.com</td>
              <td>0332465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>7</td>
              <td>mika jeson</td>
              <td>jesy@outlook.com</td>
              <td>0897465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>8</td>
              <td>peta gilbart</td>
              <td>gil@outlook.com</td>
              <td>0897465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>9</td>
              <td>angela grey</td>
              <td>grey@outlook.com</td>
              <td>0897465132</td>
              <td>user</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>10</td>
              <td>chris mark</td>
              <td>mark@outlook.com</td>
              <td>0897465132</td>
              <td>user</td>
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


