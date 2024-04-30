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
            <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
        </ol>
    </nav>
    <form action="{{route('roles.update')}}" style="width:100%" method="post">
        @csrf
        <div class="card">
            <div class="card-footer bg-white border-top">
                <h5 class="font-weight-light"><i class="bx bx-star mr-1 my-2"></i>Edit Roles</h5>
                <input type="hidden" value="{{$edit->id}}" name="id">
                <div class="form-group col-md-3 col-12 ">
                    <label for="name" class="control-label font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$edit->name}}"
                        placeholder="Name">
                </div>

                <div class="row">
                    <div class="form-group ml-3 mt-3 col-md-12 col-12">
                        <h3 class="font-weight-light">Permissions</h3>
                        <div class="my-4">
                            @foreach($parents as $parent)
                            <div>
                            @php
                            $selected = in_array($parent->slug, $selectedPermissions) ? 'checked' : '';
                            @endphp
                                <input class="form-check-input mx-1" type="checkbox" {{$selected}}  value="{{$parent->slug}}" name="child[]">
                                <h6 class="my-3 py-1 px-2 ml-3"></i>{{$parent->name}} Management</h6>
                            </div> 
                            @foreach($parent->child as $permission)
                            @php
                            $selected = in_array($permission->slug, $selectedPermissions) ? 'checked' : '';
                            @endphp
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" {{ $selected }} name="child[]"
                                    value="{{$permission->slug}}" id="{{$permission->id}}">
                                <label class="form-check-label mr-3" for="{{$permission->id}}">
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
@endsection