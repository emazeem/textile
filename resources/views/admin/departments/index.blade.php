@extends('admin.layout.master')
@section('content')


    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
    <div class="row">
      <div class="col-12 mb-2">
      <h3 class="float-left pb-1 font-weight-light"> <i class="bx bx-copy-alt"></i> Departments</h3>
      <button type="button" class="btn btn-primary float-right pb-1 font-weight-light" data-toggle="modal" data-target="#addModal">
      <i class="fa fa-plus-circle mr-1"></i> Department
    </button>
      </div>
      <!--Add Department Modal-->
      <div class="modal fade mt-5" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="user-form" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="" name="id">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel"><i class="bx bx-copy-alt"></i>Add Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="control-label">Department Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Department Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Department Head</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Department Head" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="feather icon-Add"></i> Add</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade mt-5" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="user-form" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="" name="id">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><i class="bx bx-copy-alt"></i>Edit Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="control-label">Department Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Department Name" value="Spinning">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Department Head</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Department Head" value="Ms. Ayesha Khan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="feather icon-Add"></i> Edit</button>
                </div>
            </form>
        </div>
      </div>
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
              <th>Department Name</th>
              <th>Department head</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach(getDepartments() as $department)
          <tr class="table-row">
              <td>{{$department['id']}}</td>
              <td>{{$department['Department Name']}}</td>
              <td>{{$department['Department Head']}}</td>
              <td class="text-center">
              <!-- <button type="button" class="btn btn-success btn-sm pb-1 font-weight-light fas fa-edit" data-toggle="modal" data-target="#editModal">
              </button> -->
              <a href="#" class="btn btn-success btn-sm pb-1 font-weight-light"><i class="fas fa-edit" data-toggle="modal" data-target="#editModal"></i></a>
              <a href="" method="post" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
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


