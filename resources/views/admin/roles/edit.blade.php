@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
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
        <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" action="{{route('roles.update')}}">
            @csrf
            <input type="hidden" value="{{$edit->id}}" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Update Roles</h5>
                </div>
            </div>
            <div class="card-body pt-4 bg-white border-top">
            <div class="col-md-4 pb-4">
                <label for="name" class="control-label font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$edit->name}}">
                </div>

                <div class="col-md-4 pb-4">
                <label for="permmission" class="control-label font-weight-bold">Permissions</label>
                <input type="text" class="form-control" id="permmission" name="permission_name" placeholder="Permission Name" value="{{$edit->permission_name}}">
                </div>

                <div class="card-footer bg-white border-top">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
