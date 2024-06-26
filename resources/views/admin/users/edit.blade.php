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
    <form class="form-horizontal row" id="user-form" method="post" enctype="multipart/form-data" action="{{route('users.update')}}">
         @csrf
         <input type="hidden" name="id" value="{{$edit->id}}">
         <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class="feather icon-user mr-1"></i>Edit User</h4>
                        </div>
                    </div>
            </div>
            <div class="card-body pt-4 bg-white border-top">
                    <div class="row">
                        <div class="form-group col-md-3 col-12">
                            <label for="fname" class="control-label font-weight-bold float-left">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname"placeholder="First Name" autocomplete="off" value='{{$edit->fname}}'>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="lname" class="control-label font-weight-bold float-left">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname"placeholder="Last Name" autocomplete="off" value='{{$edit->lname}}'>
                        </div>
                        <div class="form-group col-md-3 col-12">
                            <label for="email" class="control-label font-weight-bold float-left">Email</label>
                            <input type="text" class="form-control" id="email" autocomplete="off" name="email" placeholder="Email" value='{{$edit->email}}'>
                        </div>
                        <div class="form-group col-md-3 col-12 ">
                            <label for="password" class="control-label font-weight-bold float-left">Password</label>
                            <input type="password" class="form-control" id="password" autocomplete="off" name="password"placeholder="Password" value='{{$edit->password}}'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="role" class="control-label font-weight-bold float-left">Role</label>
                            <select class="form-select custom-select" name="role" >
                                <option value="user">--Select Role</option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--Date Of Joining-->
                        <div class="col-md-3">
                            <label for="joining" class="control-label font-weight-bold float-left">Date of Joining</label>
                            <input type="date" id="joining" name="joining" class="form-control w-100" value='{{$edit->joining}}'>
                        </div>
                        <div class="col-md-3">
                            <label for="designation" class="control-label font-weight-bold float-left">Designation</label>
                            <select type="dropdown" id="designation" name="designation" class="form-control w-100" value='{{$edit->designation}}'>
                            <option value="Laravel internee">Laravel Internee</option>
                            <option value="Sale Executive">Sales Executive</option>
                            <option value="CEO">Cheif Executive Officer</option>
                            <option value="Sales internee">Sales Internee</option>
                            <option value="Content writer">Content Writer</option>
                        </select>
                            </div>
                            <div class="col-md-3">
                                <label for="department" class="control-label font-weight-bold float-left">Department</label>
                                <select type="dropdown" id="department" name="department" class="form-control w-100" value='{{$edit->department}}'>
                                <option value="Sales department">Sales Department</option>
                                <option value="Software department">Software Department</option>
                        </select>
                        </div>
                        
                    </div>
                    <div class="card-footer bg-white mt-4 border-top">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary user-btn float-right mt-2"><i class="feather icon-save"> </i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#user-form").on('submit', (function (e) {
                var button = $('.user-btn');
                var previous = $('.user-btn').html();
                button.attr('disabled', 'disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing');
                e.preventDefault();
                $.ajax({
                    url: "{{route('users.update')}}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data) {
                        button.attr('disabled', null).html(previous);
                        swal('success', data.success, 'success').then(() => {
                            window.location.href = '{{url('users/show')}}/' + data.id;
                        });
                     },
                    error: function (xhr) {
                        button.attr('disabled', null).html(previous);
                        erroralert(xhr);
                    }
                });
            }));
            

        });
    </script>

@endsection