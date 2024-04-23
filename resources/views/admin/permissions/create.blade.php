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
        <form   style="width:100%" method="post" action="{{route('permissions.store')}}" >
        @csrf
        <div class="card ">
            <div class="card-header bg-light">
                <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Grant Permissions</h5>
            </div>
            <div class="card-body">
                <div class="col-md-4 pb-4">
                    <label for="name" class="control-label font-weight-bold">Name</label>
                    <input class="form-control" name="name" placeholder="Name">
                </div>
                <div class="col-md-4 pb-4">
                <!-- <label for="permission" class="control-label font-weight-bold">Permission</label>
                <input class="form-control" name="permission" placeholder="Permission"> -->
                </div>

                
                <!--Button -->
                <div class="card-footer bg-white border-top">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save mr-1"></i>Save</button>
                        </div>
                    </div>
                </div>
        </div>
    </form>
</div>
</script>
@endsection
