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
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card ">
            <div class="card-header">
                <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Add Customer</h5>
            </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label font-weight-bold">Name</label>
                    <input class="form-control" name="name" placeholder="name">
                </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label font-weight-bold">Address</label>
                    <input class="form-control" name="address" placeholder="address">
                </div>
                <div class="col-md-4 pb-4">
                    <label for="remarks" class="control-label font-weight-bold">Industry</label>
                    <input class="form-control" name="address" placeholder="address">
                </div>
                <!--Button -->
                <div class="card-footer bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save mr-1"></i>Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
