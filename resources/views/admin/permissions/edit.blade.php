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
        <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">Permissions List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Edit permissions</h5>
                    
                </div>
            </div>
            <div class="card-body pt-4 bg-white border-top">
                
                <div class="col-md-4 pb-4">
                    <label for="category" class="control-label font-weight-bold">Category</label>
                    <input class="form-control" name="category" placeholder="Category" value='Admin'>
                </div>
                <div class="col-md-12 pb-4">
                    <label for="permissions" class="control-label font-weight-bold">Permissions</label>
                    <select class="multi-select form-control w-100" name="permissions[]" multiple="multiple" id="permissions">
                        <option selected value="View-user">View User</option>
                        <option selected value="Show-User">Show User</option>
                        <option selected value="Delete-User">Delete User</option>
                        <option selected value="Create-User">Create User</option>
                    </select>
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
<style>
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #27458c !important;
    color: #fff !important;
}
</style>
<script>
    $(document).ready(function() {
    $('.multi-select').select2();
});
</script>
@endsection