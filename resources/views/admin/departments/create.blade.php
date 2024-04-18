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
        <li class="breadcrumb-item"><a href="{{route('departments.index')}}">Departments List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Edit Department</h5>
                    
                </div>
            </div>
            <div class="card-body pt-4 bg-light border-top">
                
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label">Department Name</label>
                    <input class="form-control" name="name" placeholder="Department Name" value='Spinning'>
                </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label">Department Head</label>
                    <input class="form-control" name="address" placeholder="Department Head" value='Ms. Ayesha Khan'>
                </div>
                <div class="card-footer bg-light border-top">
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
