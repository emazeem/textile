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
    <form class="form-horizontal row" id="user-form" method="post" enctype="multipart/form-data">
         @csrf
         <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-footer bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-light"><i class="feather icon-user"></i>Add User</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 col-12">
                            <label for="fname" class="control-label font-weight-bold">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname"placeholder="First Name" autocomplete="off" value=''>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="lname" class="control-label font-weight-bold">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname"placeholder="Last Name" autocomplete="off" value=''>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="email" class="control-label font-weight-bold">Email</label>
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-3 col-12 ">
                            <label for="password" class="control-label font-weight-bold">Password</label>
                            <input type="password" class="form-control" id="password" autocomplete="off" name="password"placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3 ">
                            <label for="phone" class="control-label font-weight-bold">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"value="">
                        </div>
                        <div class="col-md-3">
                            <label for="role" class="control-label font-weight-bold">Role</label>
                            <select class="form-select custom-select" name="role">
                                <option value="user">--User</option>
                            </select>
                        </div>
                        <!--Date Of Joining-->
                        <div class="col-md-3">
                            <label for="joining" class="control-label font-weight-bold">Date of Joining</label>
                            <input type="date" id="joining" name="joining" class="form-control w-100">
                        </div>
                        <div class="col-md-3">
                            <label for="designation" class="control-label font-weight-bold">Designation</label>
                            <select type="dropdown" id="designation" name="designation" class="form-control w-100">
                            <option value="Laravel internee">Laravel Internee</option>
                            <option value="Sale Executive">Sales Executive</option>
                            <option value="CEO">Cheif Executive Officer</option>
                            <option value="Sales internee">Sales Internee</option>
                            <option value="Content writer">Content Writer</option>
                    </select>
                        </div>
                        <div class="col-md-3">
                            <label for="department" class="control-label font-weight-bold">Department</label>
                            <select type="dropdown" id="department" name="department" class="form-control w-100">
                            <option value=""></option>
                            <option value="Sales department">Sales Department</option>
                            <option value="Software department">Software Department</option>
                    </select>
                        </div>
                        
                    </div>
                    <div class="card-footer bg-light border-top">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save"> </i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection