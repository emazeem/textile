@extends('admin.layout.master')
@section('content')
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"> <i class='bx bx-key mr-1'></i></i>Permissions</h3>
          <a href="{{route('permissions.create')}}" class="btn btn-primary shadow-sm float-right mt-2" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus-circle mr-1"></i>Permission</a>
      </div>
      <!--Add Permissions Modal-->
      <div class="modal fade mt-5" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="permission-form" method="post" action="{{route('permissions.store')}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel"><i class="bx bx-key mr-1"></i>Add Permission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="control-label font-weight-bold">Permission Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Permission Name" value="">
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
    <!--Edit Permissions Modal-->
    <div class="modal fade mt-5" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="permission-form" method="post" action="{{route('permissions.update')}}">
                @csrf
                <input type="hidden" id="id" name="id">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><i class="bx bx-key mr-1"></i>Edit Permission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="control-label font-weight-bold">Permission Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Permission Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="feather icon-Add"></i> Update</button>
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
      <!--permissions table-->
      <div class="col-lg-12 table-responsive mt-2">
        <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
          <thead >
            <tr class="bg-c-blue">
              <th>ID</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($permissions)>0)
          @foreach($permissions as $permission)
            <tr class="table-row">
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td>
                    <a href="{{route('permissions.edit', ['id'=>$permission->id])}}" data-permission-id="{{ $permission->id }}" class="btn btn-success btn-sm edit-permission" data-toggle="modal" data-target="#editModal"><i class="fas fa-edit"></i></a>
                    <a href="{{route('permissions.delete', $permission->id)}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
                 </td>
            </tr>
            @endforeach
            @else
            <tr class="bg-white">
              <td colspan="100%" class="text-center">No record found</td>
            </tr>
            @endif
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
  
<script>
      $(document).on('click', '.edit-permission', function(e) {
      e.preventDefault();
        var editUrl = $(this).attr('href');
    $.ajax({
      url: editUrl,
        type: 'GET',
        success: function(permission) {
            $('#editModal #name').val(permission.name);
            $('#editModal #id').val(permission.id);
            $('#editModal').modal('show');
        },
        error: function() {
            alert('Error fetching permission data.');
        }
    });
});
$(document).on('click', '.delete', function (e) {
  e.preventDefault();
                swal({
                    title: "Are you sure to delete this permission?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var id = $(this).attr('data-id');
                            var token = '{{csrf_token()}}';
                            e.preventDefault();
                            $.ajax({
                              url: $(this).attr('href'),
                                type: 'POST',
                                dataType: "JSON",
                                data: {id:id,_token:token},
                                success: function (data) {
                                    swal('success', data.success, 'success').then(function (){
                                        location.reload();
                                    });
                                },
                                error: function (xhr) {
                                    erroralert(xhr);
                                },
                            });

                        }
    });
  });
    </script>
@endsection


