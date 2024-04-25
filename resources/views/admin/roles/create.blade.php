@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
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
            <li class="breadcrumb-item"><a href="">Roles List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Details</li>
        </ol>
        </nav>
        <form  action="{{route('roles.store')}}" style="width:100%" method="post" >
        @csrf
        <div class="card">
            <div class="card-footer bg-white border-top">
                <h5 class="font-weight-light"><i class="bx bx-star mr-1"></i>Add Roles</h5>
                
                    <div class="form-group col-md-3 col-12 ">
                        <label for="name" class="control-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <div class="form-group col-md-6 col-12 ">
                        <label for="permissions" class="control-label font-weight-bold">Permissions</label>
                        <select class="multi-select form-control w-100" name="child[]" multiple="multiple" id="permissions">
                        <option value="">--Select Permissions</option>
                        @foreach($parents as $parent)    
                            <optgroup label="{{$parent->name}}">
                            @foreach($parent->child as $permission)
                            <option value="{{$permission['name']}}">{{$permission['name']}}</option>
                            @endforeach
                        </optgroup>
                        @endforeach 
                        </select>

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
