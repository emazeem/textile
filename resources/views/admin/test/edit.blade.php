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
        <li class="breadcrumb-item"><a href="{{route('test.index')}}">Test List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Update Test</h5>
                </div>
            </div>
            <div class="card-body pt-4 bg-light border-top">
                <div class="col-md-4 pb-4">
                <label for="lab" class="control-label font-weight-bold">Lab</label>
                <select type="dropdown" id="lab" name="lab" class="form-control w-100">
                    <option value="Chemical lab">Chemical Lab</option>
                    <option value="Physcial lab">Physical Lab</option>
                    <option value="Wet lab">Wet Lab</option>
                </select>
                </div>
                <div class="col-md-4 pb-4">
                <label for="name" class="control-label">Name</label>
                <input class="form-control" name="name" placeholder="Name">
                </div>
                <div class="col-md-4 pb-4">
                <label for="description" class="control-label">Description</label>
                <input class="form-control" name="description" placeholder="Description">
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
