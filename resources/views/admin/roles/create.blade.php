@extends('admin.layout.master')
@section('content')
<script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
@if(Session::has('success'))
<script>
$(document).ready(function() {
    swal("Done!", '{{Session('
        success ')}}', "success");
});
</script>
@endif
<div class="row pb-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Roles List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Details</li>
        </ol>
    </nav>
    <form action="{{route('roles.store')}}" style="width:100%" method="post">
        @csrf
        <div class="card">
            <div class="card-footer bg-white border-top">
                <h5 class="font-weight-light"><i class="bx bx-star my-3 mr-1"></i>Add Roles</h5>
                <div class="form-group col-md-3 col-12 ">
                    <label for="name" class="control-label font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="row">
                    <div class="form-group ml-3 mt-3 col-md-12 col-12">
                        <h3 class="font-weight-light">Permissions</h3>
                        <div class="my-4">
                            @foreach($parents as $parent)
                            <h6 class="my-3"><i class="bx bxs-cog mr-1"></i>{{$parent->name}} Management</h6>
                            @foreach($parent->child as $permission)
                            <div class="form-check form-check-inline">
                               
                                <input class="form-check-input" type="checkbox" name="child[]"
                                    value="{{$permission->id}}" id="permission_{{$permission->id}}">
                                <label class="form-check-label mr-3" for="permission_{{$permission->id}}">
                                    {{$permission->name}}
                                </label>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white border-top">
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary user-btn float-right">
                            <i class="feather icon-save"> </i> Save</button>
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
<div>
    <div>
    </div>
</div>

@endsection