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
        <li class="breadcrumb-item"><a href="">Customer Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Contacts</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Update Contact</h5>
                    
                </div>
            </div>
            <div class="card-body pt-4 bg-light border-top">
                
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label">Name</label>
                    <input class="form-control" name="name" placeholder="Name">
                </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label">Email</label>
                    <input class="form-control" name="address" placeholder="Email">
                </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label">Phone</label>
                    <input class="form-control" name="industry" placeholder="Phone">
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
